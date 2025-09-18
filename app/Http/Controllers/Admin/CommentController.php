<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function deleteComment($id) {
        $comment = Comment::findOrFail($id);

        $comment->delete();
        return back()->with('comment-delete', 'Komment törölve!');
    }

    public function storeComment(Request $request) {
        $validated = $request->validate([
            'comment' => 'required|string|min:5|max:1000',
            'name' => 'required|string|min:2|max:50',
        ]);

        $comment = new Comment();
        $comment->comment = $validated["comment"];
        $comment->author = $validated["name"];
        $comment->save();

        return redirect()->back()->with('successComment', 'A komment mentve');
    }
}
