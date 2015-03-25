<?php

class FilesController extends \BaseController {

	// public function indexMoveFiles() {
	// 	return View::make('files.movefiles');
	// }

	public function postImportFiles() {

		DB::table('terms')->truncate();

		$results = Excel::load('public/vocabulary2.xlsx', function($reader){

		})->get();

		// var_dump($results->toArray());

		foreach ($results as $row) {
			Term::create([
				'lang_id'=>$row->lang_id,
				'title'=>$row->title,
				'description'=>$row->description
				]);
		}
		return View::make('files.indexImportFiles');

	}
		

	public function postMoveFiles() {



	Excel::create('mindazub', function ($excel) {

    $excel->sheet('Terminai', function ($sheet) {

    	$terms = Term::all();



        $data = [];

        array_push($data, $terms);

        $sheet->fromArray($terms);
    });

	})->store('xls', storage_path('/../../public'));


		// return View::make('files.movingfiles');
		return View::make('files.indexMoveFiles');
	}

}