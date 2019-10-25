<?php

namespace App;

use App\ContactForm;

class UploadData
{
    public $composite;

    public function __construct(ContactForm $composite)
    {
        $this->composite = $composite;
    }
}
