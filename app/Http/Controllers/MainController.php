<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Models
use App\Models\Blog_articles;
use App\Models\Blog_categories;

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

        # Query's Template
        $data['categories'] = Blog_categories::orderBy('id', 'ASC')->get();
        $data['articles'] = Blog_articles::with('cat')->orderBy('id', 'desc')->paginate(1);

        # Page Modules
        $data['page_module'] = array(
            'module_homepage/plugins/plugin_blog/articles',
        );

        return $this->template->load_template($data);

    }

}