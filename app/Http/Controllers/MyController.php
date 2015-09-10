<?php 	namespace App\Http\Controllers;

class MyController extends Controller{
    function show(){
        $name = 'Junpei Simotsu';
        return View('myFirstView', compact('name'));
    }
}