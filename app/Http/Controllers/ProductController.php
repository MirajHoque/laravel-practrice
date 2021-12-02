<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\dataTrait;
use App\Models\Product;

class ProductController extends Controller
{
    use DataTrait;
    
    function getProducts(){
       $products = $this->graveData(new Product());
       echo $products;
    }
}
