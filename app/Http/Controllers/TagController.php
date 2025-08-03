<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class TagController extends Controller
{
    public function index(): Collection
    {
        return Tag::all();
    }
}
