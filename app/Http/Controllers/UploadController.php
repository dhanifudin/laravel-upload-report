<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function uploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $file = $request->file('file');

        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('uploads', $filename);

        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $path);
    }
}
