<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

# Models
use App\Models\Blog_articles;
use App\Models\Blog_categories;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        # Articles Blog

        $article = new Blog_articles();

        $article->title = '¡Bienvenido a Stormblog! Tu blog tecnológico de confianza';
        $article->slug = 'bienvenido-a-stormblog-tu-blog-tecnologico-de-confianza';
        $article->category = 1;
        $article->message = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui sodales nisi interdum tempor. Suspendisse pretium quam ipsum, at egestas ante ornare sit amet. Maecenas vitae sem id enim mollis volutpat nec nec nulla. Sed commodo ornare mauris nec bibendum.</p>';
        $article->short_message = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui sodales nisi interdum tempor. Suspendisse pretium quam ipsum, at egestas ante ornare sit amet. Maecenas vitae sem id enim mollis volutpat nec nec nulla. Sed commodo ornare mauris nec bibendum.</p>';
        $article->save();

        $article = new Blog_articles();

        $article->title = '[CURSO] Laravel 12 - Como crear un blog';
        $article->slug = 'curso-laravel-12-como-crear-un-blog';
        $article->category = 2;
        $article->message = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui sodales nisi interdum tempor. Suspendisse pretium quam ipsum, at egestas ante ornare sit amet. Maecenas vitae sem id enim mollis volutpat nec nec nulla. Sed commodo ornare mauris nec bibendum.</p>';
        $article->short_message = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui sodales nisi interdum tempor. Suspendisse pretium quam ipsum, at egestas ante ornare sit amet. Maecenas vitae sem id enim mollis volutpat nec nec nulla. Sed commodo ornare mauris nec bibendum.</p>';
        $article->save();

        # Categories Blog
        
        $category = new Blog_categories();

        $category->name = 'Noticias de Tecnología';
        $category->slug = 'noticias-de-tecnologia';
        $category->save();

        $category = new Blog_categories();
        
        $category->name = 'Lenguajes de Programación';
        $category->slug = 'lenguajes-de-programacion';
        $category->save();

        $category = new Blog_categories();

        $category->name = 'Desarrollo Web';
        $category->slug = 'desarrollo-web';
        $category->save();

        $category = new Blog_categories();

        $category->name = 'Desarrollo de Apps Móviles';
        $category->slug = 'desarrollo-de-apps-moviles';
        $category->save();

        $category = new Blog_categories();

        $category->name = 'Inteligencia Artificial';
        $category->slug = 'inteligencia-artificial';
        $category->save();

        $category = new Blog_categories();

        $category->name = 'Ciberseguridad';
        $category->slug = 'ciberseguridad';
        $category->save();

        $category = new Blog_categories();

        $category->name = 'Desarrolló de Videojuegos';
        $category->slug = 'desarrollo-de-videojuegos';
        $category->save();

        $category = new Blog_categories();

        $category->name = 'Hardware y Gadgets';
        $category->slug = 'hardware-y-gadgets';
        $category->save();

    }
}
