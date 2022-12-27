<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;
use function PHPSTORM_META\map;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $posts = Post::with(['user', 'user_profile', 'liked', 'saveds'])->withCount(['postLikes', 'postSaveds', 'postComments'])->paginate(10);
            return response()->json([
                'status' => 'success',
                'data' => $posts
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());
            $request->merge([
                'image' => $image->hashName()
            ]);
            
            $post = Post::create([
                'user_id' => $request->user()->id,
                'title' => $request->title,
                'image' => $request->image ?? null,
                'description' => $request->description,
            ]);
            return response()->json([
                'status' => 'success',
                'data' => $post
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $post = Post::with('user')->findOrFail($id);
            return response()->json([
                'status' => 'success',
                'data' => $post
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $post = Post::findOrFail($id);
            $image = $request->file('image');
            if ($image) {
                $image->storeAs('public/images', $image->hashName());
                $request->merge([
                    'image' => $image->hashName()
                ]);
            }else{
                $request->merge([
                    'image' => $post->image
                ]);
            }
            $post->update([
                'title' => $request->title ?? $post->title,
                'image' => $request->image ?? $post->image,
                'description' => $request->description ?? $post->description,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Post deleted'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
