<?php

namespace App\Http\Controllers\Pages;

# Controller base
use App\Http\Controllers\Controller;

# Library Template
use App\Libraries\Template;

# Models
use App\Models\Blog_articles;
use App\Models\Blog_categories;

use Illuminate\Http\Request;

class BlogController extends Controller{

    protected $template;

    public function __construct(Template $template){

        $this->template = $template;

    }

    /**
    *   Blog System - Controller
    *
    * @package      StormBlog
    * @subpackage   Controller - Blog System
    * @category     Blog System
    * @author       StormByte
    */

    public function blog_articles(Request $request){

        # Params URL
        $slug = $request->route('slug') ?? $request->input('slug');
        $type = $request->route('type') ?? $request->input('type');

        /*---------------------------------
        #   Article - Blog
        ---------------------------------*/

        if($type === 'article'){

            echo "articulo";

        }

        /*---------------------------------
        #   Article - Blog
        ---------------------------------*/

        if($type === 'category'){

            # Site title
            $data['template_title'] = 'Blog de la comunidad';

            # Category ID
            $category = Blog_categories::where('slug', $slug)->first();
            $category_id = $category->id;

            # Query's Template
            $data['categories'] = Blog_categories::orderBy('id', 'ASC')->get();
            $data['articles'] = Blog_articles::with('cat')->where('category', $category_id)->orderBy('id', 'desc')->paginate(10);

            # Page data
            $data['page_title'] = 'Artículo de la categoría: ';
            $data['page_subtitle'] = $category->name;

            # Page modules
            $data['page_module'] = array(
                'module_blog/plugins/plugin_articles/articles',
            );

            return $this->template->load_template($data);

        }

        /*---------------------------------
        #   Articles - Blog
        ---------------------------------*/

        if($type === NULL && $slug === NULL){

            # Site title
            $data['template_title'] = 'Blog de la comunidad';

            # Query's Template
            $data['categories'] = Blog_categories::orderBy('id', 'ASC')->get();
            $data['articles'] = Blog_articles::with('cat')->orderBy('id', 'desc')->paginate(10);

            # Page Modules
            $data['page_module'] = array(
                'module_blog/plugins/plugin_articles/articles',
            );

            return $this->template->load_template($data);

        }

            

    }

}