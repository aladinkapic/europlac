<?php

namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Files;
use App\Models\Upload\UploadFiles;
use Illuminate\Http\Request;

class UploadController extends Controller{
    public function uploadFajlova(Request $request){
        $fileName = md5(time()).'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path($request->path), $fileName);

//        dd(request()->file->getClientOriginalName());
//        dd($request->file('files')->getClientOriginalName());
        try{
            $file = Files::create([
                'file_name' => $fileName,
                'real_name' => request()->file->getClientOriginalName(),
                'type' => request()->file->getClientOriginalExtension()
            ]);
        }catch(\Exception $e){
            return response()->json([$e->getCode() => $e->getMessage()]);
        }
        return response()->json(['success'=> $file->id]);
    }
}
