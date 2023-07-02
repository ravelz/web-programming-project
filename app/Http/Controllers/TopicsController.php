<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index(){
        $tags = Tag::orderBy("title_tag")->get()->groupBy(function ($article) {
            return strtoupper(substr($article->title_tag, 0, 1));
        });
        // dd($tags->get("C"), $tags->keys());
        return view("topics")
        ->with('tags', $tags);
    }
}
