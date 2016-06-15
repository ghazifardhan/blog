<?php

namespace App\Http\Controllers;

use App\HR;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class HRController extends Controller
{
    public function index()
	{
		$hr = HR::all();
		return view('HR.index', compact('HR'));
	}
	
	public function create()
	{
		return view('HR.create');
	}
	
	public function store()
	{
		$input = Input::all();
		HR::create($input);
		return Redirect::route('HR.index');
	}
	
	public function show($id)
	{
		$hr = HR::find($id);
		return view('HR.show', compact('HR'));
	}
	
	public function edit($id)
	{
		$hr = HR::find($id);
		return view('HR.edit', compact('HR'));
	}
	
	public function update($id)
	{
		$hr = HR::find($id);
		$input = array_except(Input::all(), '_method');
		$hr->update($input);
		
		return Redirect::route('HR.index');
	}
	
	public function destroy($id)
	{
		$hr = HR::find($id);
		$hr->delete();
		
		return Redirect::route('HR.index');
	}
}
