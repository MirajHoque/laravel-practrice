<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function getCommentsByPost($id){
        
        $postComments = Post::find($id)->comments;
        return $postComments;
    }
}
