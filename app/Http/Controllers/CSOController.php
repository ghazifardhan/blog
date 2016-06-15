<?php

namespace App\Http\Controllers;

use App\CSO;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class CSOController extends Controller
{	
    public function index()
	{
		$cso = CSO::all();
		return view('CSO.index', compact('CSO'));
	}
	
	public function create()
	{
		return view('CSO.create');
	}
	
	public function store()
	{
		$input = Input::all();
		CSO::create($input);
		return Redirect::route('CSO.index');
	}
	
	public function show($id)
	{
		$cso = CSO::find($id);
		return view('CSO.show', compact('CSO'));
	}
	
	public function edit($id)
	{
		$cso = CSO::find($id);
		return view('CSO.edit', compact('CSO'));
	}
	
	public function update($id)
	{
		$cso = CSO::find($id);
		$input = array_except(Input::all(), '_method');
		$cso->update($input);
		
		return Redirect::route('CSO.index');
	}
	
	public function destroy($id)
	{
		$cso = CSO::find($id);
		$cso->delete();
		
		return Redirect::route('CSO.index');
	}
}
