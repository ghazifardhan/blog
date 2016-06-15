<?php

namespace App\Http\Controllers;

use App\SC;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class SCController extends Controller
{
    public function index()
	{
		$sc = SC::all();
		return view('SC.index', compact('SC'));
	}
	
	public function create()
	{
		return view('SC.create');
	}
	
	public function store()
	{
		$input = Input::all();
		SC::create($input);
		return Redirect::route('SC.index');
	}
	
	public function show($id)
	{
		$sc = SC::find($id);
		return view('SC.show', compact('SC'));
	}
	
	public function edit($id)
	{
		$sc = SC::find($id);
		return view('SC.edit', compact('SC'));
	}
	
	public function update($id)
	{
		$sc = SC::find($id);
		$input = array_except(Input::all(), '_method');
		$sc->update($input);
		
		return Redirect::route('SC.index');
	}
	
	public function destroy($id)
	{
		$sc = SC::find($id);
		$sc->delete();
		
		return Redirect::route('SC.index');
	}
}
