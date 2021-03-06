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
	
	return View::make('lorem')->with('paragraphs', $paragraphs)->with('number', $number);
});

Route::get('users', function()
{
	$userno = 1;
	$bd = false;
	$bio = false;
	
	$flags = array('userno'=>$userno, 'bd'=>$bd, 'bio'=>$bio);
	return View::make('users')->with('flags', $flags);
});

Route::post('users', function()
{
	$user = Faker\Factory::create();
	
	$userno = Input::get('userno');
	$bd = false;	
	$bio = false;

	if (Input::get('bd') == true)
		$bd = true;
	
	if (Input::get('bio') == true)
		$bio = true;
	
	$flags = array('userno'=>$userno, 'bd'=>$bd, 'bio'=>$bio);

	return View::make('users')->with('user', $user)->with('flags', $flags);
});
