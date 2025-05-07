<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Http\Resources\Post as PostResource;
use App\Models\Post as PostModel;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    public function index() {
        return PostResource::collection(PostModel::all());
    }

    public function create(PostCreateRequest $request) {
        $post = new PostModel();
        $post->threadId = $request->input('threadId');
        $post->userId = $request->input('userId');
        $post->content = $request->input('content');

        $post->save();

        return new PostResource($post);
    }

    public function delete(int $id) {
        $post = PostModel::where('id', $id)->first();
        $post -> is_deleted = true;
        $post -> deleted_at = Carbon::now();
        $post -> save();
    }
}
