<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileUpload
{
    // uploding file
    public function fileUpload($file, $folderName = 'files', $oldFile = NULL)
    {
        $path = $file->store($folderName, 'public');

        if ($oldFile) {
            $old_path = str_replace('storage', '/public', $oldFile);
            Storage::delete($old_path);
        }

        return  'storage/' . $path;
    }

    // deleting file
    public function deleteFile($file)
    {
        $path = str_replace('storage', '/public', $file);
        Storage::delete($path);
    }
}
