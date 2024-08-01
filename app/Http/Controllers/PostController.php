<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Here is a list of all blog posts";
    }

    public function create(){
        return "This is the page to create a new blog post";
    }

    public function show($id){
        return "This is the page to show a blog post with id of $id";
    }
}
