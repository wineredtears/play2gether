<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category as CategoryResource;
use App\Models\Category as CategoryModel;
use App\Http\Resources\Thread as ThreadResource;
use App\Models\Thread as ThreadModel;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function index() {
        return CategoryResource::collection(CategoryModel::query()->where('is_deleted', false)->get());
    }
    public function threads(string $slug) {
        $category = CategoryModel::where('slug', $slug)->firstOrFail();

        $threads = ThreadModel::where('category_id', $category->id)
            ->where('is_deleted', false)
            ->get();

        return ThreadResource::collection($threads);
    }
}
