<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function link()
    {
        return $this->file;
    }
}
