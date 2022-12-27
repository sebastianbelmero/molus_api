<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostSaved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostSavedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $postSaved = PostSaved::with(['post'])->paginate(1);
            return response()->json([
                'status' => 'success',
                'data' => $postSaved
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
            $post = Post::findOrfail($request->post_id);
            $postSaved = PostSaved::where('post_id', $request->post_id)->where('user_id', Auth::user()->id)->first();
            if ($postSaved) {
                $postSaved->delete();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Post unsaved'
                ], 200);
            } else {
                PostSaved::create([
                    'post_id' => $request->post_id,
                    'user_id' => Auth::user()->id
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => 'Post saved'
                ], 200);
            }
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
        //
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
        //
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
            $postSaved = PostSaved::findOrFail($id);
            $postSaved->delete();
            return response()->json([
                'status' => 'success',
                'data' => $postSaved
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
