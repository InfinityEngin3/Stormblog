<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use App\Models\Members;
use App\Models\Members_groups;

class Template{

    protected $template;
    protected $pathTemplate;
    protected $urlTemplate;
    protected $urlDefault;

    public function __construct(){

        // Template config item
        $this->template = Config::get('app.template');

        // Path template
        $this->path_template = base_path("resources/templates/{$this->template}/");

        // URL Template
        $this->url_template = URL::to("templates/{$this->template}/");

        // Asset URL
        // $this->asset = asset("templates/{$this->template}/");
        $this->asset = resource_path('templa');

    }

    /**
    *  Metadata website
    *
    * @package      Inside Engine
    * @subpackage   Functions - Metadata Website
    * @category     Meta Website
    * @author       Inside System
    */

    public function show_title($data = ''){

        return Config::get('app.name').' - '.$data;

    }

    public function show_css(){

        $config_file = "{$this->path_template}config.php";

        if(file_exists($config_file)){
            
            // Configuration file exists
            $template = include $config_file;

            if(!empty($template['css_files'])){
                foreach($template['css_files'] as $filename){
                    echo "<link rel='stylesheet' href='", url('css/file/'.$filename) ,".css' type='text/css' media='all' />";
                    echo "\n\t\t";
                }
            }

        }else{

            // Configuration file does not exist
            abort('404');

        }

    }

    public function show_js(){

        $config_file = "{$this->path_template}config.php";

        if(file_exists($config_file)){
            
            // Configuration file exists
            $template = include $config_file;

            if(!empty($template['js_files'])){
                foreach($template['js_files'] as $filename){
                    echo "<script type='module' src='", url('js/file/'.$filename) ,".js' type='text/javascript'></script>";
                    echo "\n\t\t";
                }
            }

        }else{

            // Configuration file does not exist
            abort('404');

        }

    }

    /**
    *  Template system
    *
    * @package    Inside Engine
    * @subpackage Functions - Template System
    * @category   Template System
    * @author   Inside System
    */

    public function load_template($data = NULL){

        return view('template::template', $data);

    }

    /**
    *   Content system
    *
    * @package    Inside Engine
    * @subpackage Functions - Content System
    * @category   Content System
    * @author   Inside System
    */

    /**
    *  Converts date to 'd/m/Y H:i:s' format.
    *
    * @param string $date_str
    * @return string
    */

    public function date($date_str, $option = NULL){

        $date = Carbon::parse($date_str);

        if ($option == 1) {
            return $date->format('d/m/Y H:i:s');
        }

        return $date->format('d/m/Y');

    }

    /**
    *   Database system
    *
    * @package    Inside Engine
    * @subpackage Functions - Database System
    * @category   Database System
    * @author   Inside System
    */

    public function data($value, $conditions = [], $key){

        $modelClass = is_string($value) ? $value : get_class($value);

        $query = $modelClass::query();

        foreach ($conditions as $column => $value) {
            $query->where($column, $value);
        }

        $data = $query->first();

        return $data ? $data->getAttribute($key) : null;

    }

    /**
    *   Permissions system
    *
    * @package    Inside Engine
    * @subpackage Functions - Permissions System
    * @category   Permissions System
    * @author   Inside System
    */

    public function permission_member(){

        if(auth()->id() != NULL){

            $member = Members::where('id', auth()->id())->first();
            $member_group = Members_groups::where('id', $member->member_group)->first();

            return $member_group->group_permission;

        }else{

            return 0;

        }

    }

    public function permission_type($value){

        $permissions = [
            'administrator' => 999,
            'developer' => 901,
            'mod_global' => 801,
            'moderator' => 701,
            'corporative' => 601,
            'editor' => 501,
            'member' => 401,
            'banned' => 0,
        ];

        $permission = $permissions[$value];

        return $permission;

    }

    /**
    *   Format the date to a more Spanish-friendly format.
    *
    * @param string $date_str
    * @return string
    */
/*
    public function date_format($date_str){

        // Create DateTime object from date string
        $date = DateTime::createFromFormat('d/m/Y H:i:s', $date_str);

        if (!$date) {
            throw new \Exception("Formato de fecha inválido: {$date_str}");
        }

        // Set localization to Spanish
        setlocale(LC_TIME, 'es_ES.UTF-8');

        // Formatting the date in Spanish
        return strftime('%d de %B del %Y - %H:%M:%S', $date->getTimestamp());

    } */

    /**
    *  Error system
    *
    * @package    Inside Engine
    * @subpackage Functions - Error System
    * @category   Error System
    * @author   Inside System
    */

    public function show_error(){

        return redirect('/error_404');

    }



    /******** CODE SUICIO *********/

    public function rating($value){

        $data = array(
            'like' => 'Me gusta',
            'no-like' => 'No me gusta',
            'love' => 'Me encanta',
            'angry' => 'Me enfada',
            'info' => 'Informativo',
            'laugh' => 'Me divierte',
        );

        return $data[$value];

    }

}