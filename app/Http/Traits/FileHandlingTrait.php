<?php
namespace App\Http\Traits;

trait FileHandlingTrait
{
    public function uploadFile($request,$file_field_name,$file_folder_path)
    {
        // Your file upload logic goes here
        $file = $request->file($file_field_name);
        $filename = time() . '_' . $file->getClientOriginalName();

        $file->move(public_path($file_folder_path), $filename);

        $filepath = '/'.$file_folder_path.$filename;

        return  $filepath;

    }

    public function deleteFile($file)
    {
        // Your file deletion logic goes here
    }
}