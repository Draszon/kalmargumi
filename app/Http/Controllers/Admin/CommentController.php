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
}
