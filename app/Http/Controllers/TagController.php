<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        $tags = Tag::all();
        $posts = Post::all();
        return view('tags.create', compact('tags', 'posts'));
    }

    public function store(StoreTagRequest $request)
    {
        $tags = Tag::create([
            'name' => $request->name
        ]);

        return redirect()->route('tags.index');
    }


    public function show(Tag $tag)
    {
        //
    }

    public function edit(Tag $tag)
    {
        $users = User::all();
        return view('tags.edit', compact('tag', 'users'));
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->name
        ]);

        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
