<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        return Tag::with('recipes')->get();
    }

    public function show(Tag $tag)
    {
        return $tag->load('recipes');
    }
}
