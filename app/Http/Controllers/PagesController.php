<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class PagesController extends Controller
{
   public function about(){

      return view('about', ['message'=>'<span>this message from span tag</span>','show'=>true]);
   }
    public function contact(){
       return view('pages.contact');
    }
    public function gallery(){
      return view('pages.gallery');
    }
    public function services(){
       return view('pages.services');
    }
}
