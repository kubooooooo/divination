<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sign;
use App\Models\Comment;
use App\Models\Item;


class SignController extends Controller
{
    public function index()
    {
        $signs = Sign::all();
        return view('sign.index')
            ->with(['signs' => $signs]);
    }

    public function show($id)
    {
        $today = date("Ymd");
        $sign = Sign::find($id);

        $comments = Comment::all();
        $comments_count = $comments->count();
        $comment_id = ($today + $id * 100 + $id) % $comments_count + 1;
        $comment = Comment::find($comment_id);

        $items = Item::all();
        $items_count = $items->count();
        $item_id = ($today + $id * 10) % $items_count + 1;
        $item = Item::find($item_id);

        return view('sign.show')
            ->with(['sign' => $sign, 'comment' => $comment, 'item' => $item]);
    }
}
