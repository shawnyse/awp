<?php

Route::get ('/', 'CommentController@index');

Route::get ('/comment/{comment}/like/', 'LikesController@upVote');
Route::get ('/comment/{comment}/dislike/', 'LikesController@downVote');
