<?php

Auth::routes();

Route::get("index", "HomeController@index");

Route::get("/", "NewsController@index");