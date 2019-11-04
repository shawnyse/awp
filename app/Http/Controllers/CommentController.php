<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller {

    const COMMENTS_PER_PAGE = 5;

    public function index () {

        $comments = Comment::paginate (self::COMMENTS_PER_PAGE);

        return view ('index') -> with (['comments' => $comments]);

    }

    public function create () {
        //
    }

    public function store (Request $request) {
        //
    }

    public function show (Comment $comment) {
        //
    }

    public function edit (Comment $comment) {
        //
    }

    public function update (Request $request, Comment $comment) {
        //
    }

    public function destroy (Comment $comment) {
        //
    }

}