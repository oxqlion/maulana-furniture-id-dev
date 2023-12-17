<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $validateData = $request->validate([
            'komen' => 'required',
        ]);

        $comment = Comment::create([
            'user_id' => $request->user,
            'progress_id' => $request->progress,
            'komen' => $request->komen
        ]);

        return redirect()->back();
    }
}
