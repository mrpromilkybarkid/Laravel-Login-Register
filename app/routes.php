<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

/*
| Profile Pages |
*/
Route::get('/user/{username}', array(
	'as' => 'profile-user',
	'uses' => 'ProfileController@user'
));

/*
| Authenticated Group |
*/
Route::group(array('before' => 'auth'), function() {

	/*
	| Sign Out (GET) |
	*/
	Route::get('account/sign-out', array(
		'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
	));
});

/*
| Unauthenticated Group |
*/
Route::group(array('before' => 'guest'), function() {

	/*
	| CSRF Protection Group |
	*/
	Route::group(array('before' => 'csfr'), function() {
		/*
		| Create Account (POST) |
		*/
		Route::post('/account/create', array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

		/*
		| Sign In (POST) |
		*/
		Route::post('/account/sign-in', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));
	});

	/*
	| Sign In (GET) |
	*/
	Route::get('/account/sign-in', array(
		'as' => 'account-sign-in',
		'uses' => 'AccountController@getSignIn'
	));

	/*
	| Create Account (GET) |
	*/
	Route::get('/account/create', array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
	));

	Route::get('/account/activate/{code}', array(
		'as' => 'account-activate',
		'uses' => 'AccountController@getActivate'
	));
});