<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(){

        return view('upload');

    }

    public function postUpload(Request $request)  {
        // dd($request->photo);

        // lấy tên file
        $file = $request->photo;
        $fileName = $file->getClientOriginalName();
        
        // $request->photo->store('upoad');
        $file->storeAs('public/images',$fileName);
    }
}
