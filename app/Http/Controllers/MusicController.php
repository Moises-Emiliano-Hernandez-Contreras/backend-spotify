<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function listMusic(){
        $rutaArchivo =asset('storage/cover/adeleHello.jpg'); // Reemplaza con la ubicación real del archivo                    
        //$rutaArchivo ='storage/cove/adeleHello.jpg'; // Reemplaza con la ubicación real del archivo        
        $nombre="Hello";
        $audio = asset("storage/Songs/AdeleHello.mp3");
        return response()->json(['image_url' => $rutaArchivo,"Titulo"=>$nombre,"audio"=>$audio]);
/*         return response($contenido, 200)
            ->header('Content-Type', 'image/jpeg'); */
  /*      if (Storage::exists($rutaArchivo)) {

        } else {
            return response('Archivo no encontrado', 404);
        } */


 /*        $rutaArchivo =asset('storage/cover/adeleHello.jpg');
        return response()->file($rutaArchivo); */        
            
    }
}
