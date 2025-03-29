<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Library Template
use App\Libraries\Template;

class MainController extends Controller{

    protected $template;

    public function __construct(Template $template){

        $this->template = $template;    

    }

    public function index(){

        # Site title
        $data['template_title'] = 'Página de inicio';

        return $this->template->load_template($data);

    }

}