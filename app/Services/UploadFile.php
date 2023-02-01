<?php

namespace App\Services;

use \Illuminate\Http\UploadedFile;

class UploadFile
{
    public function __construct(private UploadedFile $file, private string $filePath)
    {
        $this->file = $file;
        $this->filePath = $filePath;
    }

    public function upload()
    {
        if ($this->file->isValid()) {
            $imageName = $this->file->getClientOriginalName();
            $extension = $this->file->extension();
            $newName = md5($imageName .strtotime("now")) . "." .$extension;
            $this->file->move(public_path($this->filePath), $newName);
        }

        return $newName;
    }
}