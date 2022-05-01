<?php

namespace App\Http\Controllers;

class UploadController extends Controller
{
    public function __invoke(){
        echo "i am invoke without calling any method";
    }
}
