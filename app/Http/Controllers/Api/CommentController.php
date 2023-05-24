<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function delete($id)
    {
        $comment = Comment::query()
            ->whereId($id)->first();

        $comment->delete();
    }
}
