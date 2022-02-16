<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class MailsRequest extends FormRequest
{
    public $receipent = "admin@itecounsel.com";
    public $bcc = "info@itecounsel.com";
    public $cc = "ashfaq@quadque.tech";

    protected function fileProcess()
    {
        $files = $this->file('files');

        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            /**
             * Check if derectory exist or not
             * Create a new directory if not exist
             */

            if (!Storage::exists("public/rpl")) {
                Storage::makeDirectory("public/rpl");
            }

            //store image into storage directory
            Storage::putFileAs('public/rpl/', $file, $fileName);

            array_push($filePath, public_path('storage/rpl/' . $fileName));
        }
    }
}
