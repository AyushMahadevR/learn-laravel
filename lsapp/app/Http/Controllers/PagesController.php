<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//request library to handle  requests

class PagesController extends Controller
{
    //function inside a class is called a method /function
    public function index(){
        $title = "Welcome to laravel";
        //return view('pages.index',compact('title'));//pass value into the page (method1)
        return view('pages.index',compact('title'))->with('title',$title);//pass value into the page (method2)
    }
    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'Services'  => ['Web Design','Programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}
