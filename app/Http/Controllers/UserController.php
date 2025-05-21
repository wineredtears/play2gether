<?php

namespace App\Http\Controllers;
use App\Http\Resources\User as UserResource;
use App\Models\User as UserModel;

class UserController extends Controller
{
    public function name(int $id)
    {
        $user = UserModel::findOrFail($id); // 404 if not found
        return new UserResource($user);
    }
}
