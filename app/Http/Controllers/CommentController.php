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

        return view ('comments.show', compact ('comment'));

    }

    public function edit (Comment $comment) {

        return view ('comments.edit', compact ('comment'));

    }

    public function update (Request $request, Comment $comment) {

        $comment -> update ([
            'comment' => $request -> comment,
        ]);

        return redirect () -> action ('CommentController@index');

    }

    public function destroy (Comment $comment) {

        $comment -> delete ();

        return redirect () -> action ('CommentController@index');

    }

}
