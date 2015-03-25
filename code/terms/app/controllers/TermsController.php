<?php

class TermsController extends \BaseController {

	/**
	 * Display a listing of terms
	 *
	 * @return Response
	 */
	public function index()
	{
		$terms = Term::paginate(10);

		return View::make('terms.index', compact('terms'));
	}

	/**
	 * Show the form for creating a new term
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('terms.create');
	}

	/**
	 * Store a newly created term in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Term::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Term::create($data);

		return Redirect::route('terms.index');
	}

	/**
	 * Display the specified term.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$term = Term::findOrFail($id);

		return View::make('terms.show', compact('term'));
	}

	/**
	 * Show the form for editing the specified term.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$term = Term::find($id);

		return View::make('terms.edit', compact('term'));
	}

	/**
	 * Update the specified term in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$term = Term::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Term::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$term->update($data);

		return Redirect::route('terms.index');
	}

	/**
	 * Remove the specified term from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$term = Term::findOrFail($id)->delete();

		// Term::destroy($id);

		return Redirect::route('terms.index');;
	}

}
