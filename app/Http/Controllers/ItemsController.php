<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    //create new item
    public function add(Request $request) {
        $item = Item::create($request->all());
        
        return response()->json($item);
    }

    //update item
    public function edit(Request $request, $id) {
        // $user = User::find($id);
        // $post->update($request->all());

        // return response()->json($post);
    }

    //show item
    public function view(Request $request, $id) {
        // $user = User::find($id);

        // return response()->json($user);
    }

    //index all items
    public function index(Request $request) {
        // $users = User::all();

        // return response()->json($users);
    }
}
