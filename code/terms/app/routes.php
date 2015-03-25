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

Route::get('/', 

// IMPORT

// function(){

// DB::table('terms')->truncate();

// $results = Excel::load('public/vocabulary.xlsx', function($reader){

// })->get();

// var_dump($results->toArray());

// foreach ($results as $row) {
// 	Term::create([
// 		'title'=>$row->title,
// 		'description'=>$row->description
// 		]);
// }



// });


// EXPORT

// http://www.maatwebsite.nl/laravel-excel/docs/export

// Excel::create('Filename');


// function(){

// 	Excel::create('mindazub', function ($excel) {

//     $excel->sheet('Terminai', function ($sheet) {

//     	$terms = Term::all();



//         $data = [];

//         array_push($data, $terms);

//         $sheet->fromArray($terms);
//     });

// })->download('xlsx');

	

// });






array(

	'as'=>'home',
	'uses'=>'TermsController@index'	
));


// Route::get('/movefiles', array(
// 	'as'=>'movefiles',
// 	'uses'=>'FilesController@movefiles'
// 	));

Route::get('/exportFiles', array(
	'as'=>'postMoveFiles',
	'uses'=>'FilesController@postMoveFiles'
	));

Route::get('/importFiles', array(
	'as'=>'postImportFiles',
	'uses'=>'FilesController@postImportFiles'
	));

// Route::get('/indexmovefiles', array(
// 	'as'=>'indexMoveFiles',
// 	'uses'=>'FilesController@indexMoveFiles'
// 	));


Route::get('/todo', 'ToDoController@index');

Route::resource('terms', 'TermsController');

// Search Ability