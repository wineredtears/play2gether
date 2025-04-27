<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post as PostResource;
use App\Models\Post as PostModel;
class PostController extends Controller
{
    public function index() {
        return PostResource::collection(PostModel::all());
    }
}
