<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\FilesystemException;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class CommonController extends Controller
{
    public function show_image($name)
    {
        try{

            $path=Storage::disk('public')->path("medium/".$name);

            return response()->file($path);
//
//            $file = File::get($path);
//            $type = File::mimeType($path);
//
//            $response = Response::make($file, 200);
//            $response->header("Content-Type", $type);
//
//            return $response;

        }catch(FileNotFoundException){
            return null;
        }
        catch(FilesystemException){
            return null;
        }
    }
}
