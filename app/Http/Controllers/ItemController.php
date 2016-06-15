<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Item;
use App\Http\Requests;

class ItemController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['only' =>['create', 'store', 'edit', 'destroy']]);
	}
	
	protected $rules = [
		'item_name' => ['required', 'min:3'],
		'item_type' => ['required', 'min:3'],
		'screen_size' => ['required', 'min:3'],
		'ram' => ['min:1'],
		'internal' => ['min:1'],
	];
	
	public function getQuery()
	{
		$input = Input::get('search');
		$item = Item::where('item_name', 'LIKE', '%'.$input.'%')->get();
		return view('item.index', compact('item'));
	}
	public function index()
	{
		$item = Item::all();
		return view('item.index', compact('item'));
	}
	
	public function create()
	{
		return view('item.create');
	}
	
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);
		$input = Input::all();
		Item::create($input);
		return Redirect::route('item.index');
	}
	
	public function show($id)
	{
		$item = Item::find($id);
		return view('item.show', compact('item'));
	}
	
	public function edit($id)
	{
		$item = Item::find($id);
		return view('item.edit', compact('item'));
	}
	
	public function update($id)
	{
		$item = Item::find($id);
		$input = array_except(Input::all(), '_method');
		$item->update($input);
		
		return Redirect::route('item.index');
	}
	
	public function destroy($id)
	{
		$item = Item::find($id);
		$item->delete();
		
		return Redirect::route('item.index');
	}
}
