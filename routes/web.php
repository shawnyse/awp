<?php

Route::get ('/', 'CommentController@index');

Route::get ('/comment/{comment}/', 'CommentController@show');

Route::get ('/comment/{comment}/delete/', 'CommentController@destroy');


Route::get ('/comment/{comment}/edit/', 'CommentController@edit');
Route::post ('/comment/{comment}/edit/', 'CommentController@update');

Route::get ('/comment/{comment}/like/', 'LikesController@upVote');
Route::get ('/comment/{comment}/dislike/', 'LikesController@downVote');
