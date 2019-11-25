<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    protected $fillable = [
        'name',
        'comment',
        'likes',
    ];

    public function upvoteAndSave () {

        $this -> likes += 1;

        $this -> timestamps = false;
        $this -> update ();
        $this -> timestamps = true;

    }

    public function downvoteAndSave () {

        $this -> likes -= 1;

        $this -> timestamps = false;
        $this -> update ();
        $this -> timestamps = true;

    }
}
