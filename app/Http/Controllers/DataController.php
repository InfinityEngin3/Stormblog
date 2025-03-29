<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Config;

use App\Libraries\Template;

class DataController extends Controller{

    public function files_css($filename){

        $path = resource_path("templates/".Config::get('app.template')."/css/{$filename}");

        if (file_exists($path)) {
            return Response::make(file_get_contents($path), 200, [
                'Content-Type' => 'text/css',
            ]);
        }

        return abort(404);

    }

    public function files_js($filename){

        $path = resource_path("templates/".Config::get('app.template')."/js/{$filename}");

        if (file_exists($path)) {
            return Response::make(file_get_contents($path), 200, [
                'Content-Type' => 'application/javascript',
            ]);
        }

        return abort(404);

    }

    public function files_images($filename){

        $path = resource_path("templates/".Config::get('app.template')."/images/{$filename}");

        $mimeType = mime_content_type($path);

        if (file_exists($path)) {
            return Response::make(file_get_contents($path), 200, [
                'Content-Type' => $mimeType,
            ]);
        }

        return abort(404);

    }

}