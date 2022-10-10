<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'content'=>'required',
        ]);

        $input['user_id'] = Auth::user()->id;

        Comment::create($input);

        return back();
    }
}
