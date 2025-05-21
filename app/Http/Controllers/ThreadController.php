<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThreadCreateRequest;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\Thread as ThreadResource;
use App\Models\Post as PostModel;
use App\Models\Thread as ThreadModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    public function index() {
        return ThreadResource::collection(ThreadModel::query()->where('is_deleted', false)->get());
    }

    public function posts(int $id) {
        $posts = PostModel::where('thread_id', '=', $id)
            ->where('is_deleted', false)
            ->get();

        return PostResource::collection($posts);
    }

    public function create(ThreadCreateRequest $request) {
        $user = Auth::user();

        $thread = new ThreadModel();
        $thread->categoryId = $request->input('categoryId');
        $thread->userId = $user->id;
        $thread->name = $request->input('name');

        $thread->save();

        return new ThreadResource($thread);
    }

    public function delete(int $id) {
        $thread = ThreadModel::where('id', $id)->first();
        if ($thread -> userId !== Auth::id()) { return response() -> noContent(401); }
        $thread -> is_deleted = true;
        $thread -> deleted_at = Carbon::now();
        $thread -> save();
    }
}
