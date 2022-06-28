<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\UserResource;
use App\Http\Requests\StorePostRequest;


class PostsApiController extends Controller
{
    public function index()

    {
       /*  return Post::all();  */
        return UserResource::collection(Post::all());

    }
    public function show($id)

    { 
        return new UserResource(Post::findOrFail($id));
    }

    public function store(StorePostRequest $request)

    {
        return Post::create([
            'name' => $request->input('name'),
            'genre' =>  $request->input('genre'),
            'author' =>  $request->input('author'),
            'sortie' =>  $request->input('sortie'),
        ]);
    }

    public function update(Post $post ,StorePostRequest $request)

    {
         /*  $post = Post::findOrfail($id);*/
        $success = $post->update([
            'name' => $request->input('name'),
            'genre' =>  $request->input('genre'),
            'author' =>  $request->input('author'),
            'sortie' =>  $request->input('sortie'),
        ]);
            // will return true if it worked and false if it didn't
        return response()->json([     
            'success' => $success
        ]);
           
    }

    public function destroy(Post $post)

    {        
        $success = $post->delete();

        return response()->json([     
                'success' => $success
            ]);
           
    }

}
