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

Route::get('lorem', function()
{
	return View::make('lorem');
});

Route::post('lorem', function()
{
	$number = Input::get('paragraphs');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($number);
	
	return View::make('lorem')->with('paragraphs', $paragraphs);
});

Route::get('users', function()
{
	return View::make('users');
});

Route::post('users', function()
{
	$user = Faker\Factory::create();
	
	$userno = Input::get('userno');
	$addr = false;	
	$bio = false;

	if (Input::get('addr') == true)
		$addr = true;
	
	if (Input::get('bio') == true)
		$bio = true;

	return View::make('users')->with('user', $user)->with('userNo', $userno)->with('addr',$addr)->with('bio', $bio);
});
