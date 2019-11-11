<?php

Route::get ('/', 'CommentController@index');

Route::get ('/comment/{comment}/like/', 'LikesController@upVote');
