<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Files;
use App\Models\Administracija\FilesRelationships;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\File;

class Photos extends Controller{
    public function saveEstateImageee(Request $request){

    }
    public function saveEstateImage(Request $request){
        if($request->has('photo-input')){
            $file = $request->file('photo-input');
            $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            echo $name = md5($file->getClientOriginalName().time()).'.'.$ext;

            $file->move("images/estates/", $name);
        }
    }

    public function saveUserIcon(Request $request){
        if($request->has('photo-input')){
            $file = $request->file('photo-input');
            $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            echo $name = md5($file->getClientOriginalName().time()).'.'.$ext;

            $file->move("images/users/", $name);
        }
    }

    public function photoGallery($id){
        $estate = Estate::where('id', $id)->first();
        $images = FilesRelationships::where('property_id', $estate->id)->where('model', 'Models/Estate')->with('file')->get();

        return view('administracija.pages.estates.gallery', compact('estate', 'images'));
    }
    public function allFiles($id){
        $estate = Estate::where('id', $id)->first();
        $images = FilesRelationships::where('property_id', $estate->id)->where('model', 'Models/Estate/Files')->with('file')->get();

        return view('administracija.pages.estates.all-files', compact('estate', 'images'));
    }
    public function savePhotosToGallery(Request $request){
        for($i=0; $i<count($request->values); $i++){
            try{
                $rel = FilesRelationships::create([
                    'model' => $request->model,
                    'property_id' => $request->id,
                    'file_id' => $request->values[$i]
                ]);
            }catch (\Exception $e){}
        }
    }
    public function removeFile($id){
        try{
            $fileRel = FilesRelationships::where('id', $id)->first();
            $file = Files::where('id', $fileRel->file_id)->first();
            $fileRel->delete();
            $file->delete();
            try{
                unlink("images/estates/".$file->file_name);
            }catch (\Exception $e){return back();}
        }catch (\Exception $e){return back();}
        return back();
    }
}
