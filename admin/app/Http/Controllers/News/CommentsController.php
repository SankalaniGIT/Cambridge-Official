<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use App\News\Comment;


class CommentsController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            return view('news.comment', ['success' => '', 'bgColor' => '']);
        }
    }


    public function loadComments(Request $r)
    {
        $id = $r->input('newsID');

        $comment = new Comment();

        $comments = $comment->getComments($id);

        return $comments;
    }

    function deleteComment(Request $r)
    {
        $comment = Comment::find($r->input('commentID'));

        if ($comment->delete()) {
            echo true;
        } else {
            echo false;
        }
    }
}
