<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get people who have chat with me
        try {
            $chats = Chat::query()
                ->with('friend_list')
                ->select('*', DB::raw('CASE WHEN user_id = ' . auth()->user()->id . ' THEN friend_id ELSE user_id END as friend_list'))
                ->whereIn('id', function ($query) {
                    $query->select(DB::raw('MAX(id)'))
                        ->from('chats')
                        ->where('friend_id', auth()->user()->id)
                        ->orWhere('user_id', auth()->user()->id)
                        ->groupBy(DB::raw('IF (user_id = ' . auth()->user()->id . ', friend_id, user_id)'));
                })
                ->orderBy('created_at', 'desc')
                ->get();
            return response()->json([
                'friends' => $chats
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
        // $request->headers->set('Accept', 'application/json');
        $data = $request->getContent();
        try {
            // $chat = Chat::create([
            //     'user_id' => auth()->user()->id,
            //     'friend_id' => $data['friend_id'],
            //     'message' => $data['message'],
            // ]);
            return response()->json($data, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
            $chats = Chat::query()
                ->where('user_id', auth()->user()->id)
                ->where('friend_id', $id)
                ->orWhere('user_id', $id)
                ->where('friend_id', auth()->user()->id)
                ->get();
            return response()->json([
                'chats' => $chats
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
        //
    }
}
