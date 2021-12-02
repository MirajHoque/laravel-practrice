<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Traits\DataTrait;


class BlogController extends Controller
{
    use DataTrait;

    function getBlogs(){
       $products = $this->graveData(new Blog());
       echo $products;
    }
}
