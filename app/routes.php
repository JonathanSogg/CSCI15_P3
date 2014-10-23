<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::post('lorem', function()
{
	$number = Input::post('paragraphs');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($number);
	
	return View::make('lorem', $paragraphs);
});

Route::post('users', function()
{
	$user = Faker\Factory::create();

	return View::make('users');
});
