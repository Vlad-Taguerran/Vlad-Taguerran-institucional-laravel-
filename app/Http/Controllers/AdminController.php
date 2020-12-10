<?php

namespace App\Http\Controllers;

use App\Admin\Admin;
use App\Archivos\Archivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function post(Request $data){
        $archivo = new Admin();
       if ($data->hasFile('archivo')){
           $name = $data->title;
           $ex  = $data->file('archivo')->guessClientExtension();
           $rad = rand(1111,99999);
           $fname = "Artigo".$rad.'.'.$ex;
           $file = $data->file('archivo');
          $upload = $file->storeAs('/artigos',$name.$fname);
           $dir = "storage"."/"."artigos/".$name.$fname;
           $archivo['archivo'] = $dir;
          if (!$upload){
              return redirect()->back()
                    ->withErrors('erro','falha ao salvar arquivo')
                    ->withInput();
          }
       }
       $archivo->title = $data->title;
       $archivo->save();
       return redirect()->back();
    }

    public function distroy(Request $request)
    {   $file = $request->archivo;
            $id = $request->id;
        if(is_file($file)){
            $findFile = str_replace("storage","public",$file);
            Storage::delete($findFile);
            Admin::destroy($id);
            return redirect()->back();
        }else{
            echo "no file";
        }
    }
}
