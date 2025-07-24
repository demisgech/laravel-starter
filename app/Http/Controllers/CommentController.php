<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

class CommentController extends Controller
{
    public static function index(): Collection
    {
        return Comment::all();
    }
}
