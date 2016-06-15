<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Item;
use App\Item_Store;
use App\Http\Requests;

class ItemStoreController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['only' =>['create', 'store', 'edit', 'destroy']]);
	}
	
	protected $rules = [
		'item_name' => ['required'],
		'serial_number' => ['required', 'min:3'],
	];
	
    public function index($id)
	{
		return view('item_store.index', compact('item'));
	}
	
	public function create($id)
	{
		$item = Item::find($id);
		return view('item_store.create', compact('item'));
	}
	
	public function store($id, Request $request)
	{
		$this->validate($request, $this->rules);
		$input = Input::all();
		$item = Item::find($id);
		$input['item_id'] = $item->id;
		Item_Store::create($input);
		
		return Redirect::route('item.show', $item->id);
	}
	
	public function show($id, $iditem_store)
	{
		$item = Item::find($id);
		$item_store = Item_store::find($iditem_store);
		
		return view('item.show', compact('item'));
	}
	
	public function edit($id, $iditem_store)
	{
		$item = Item::find($id);
		$item_store = Item_Store::find($iditem_store);
		
		return view('item_store.edit', compact('item', 'item_store'));
	}
	
	public function update($id, $iditem_store)
	{
		$item = Item::find($id);
		$item_store = Item_Store::find($iditem_store);
		$input = array_except(Input::all(), '_method');
		$item_store->update($input);
		
		return Redirect::route('item.item_store.show', [$item->id, $item_store->id]);
	}
	
	public function destroy($id, $iditem_store)
	{
		$item = Item::find($id);
		$item_store = Item_Store::find($iditem_store);
		$item_store->delete();
		
		return Redirect::route('item.show', $item->id);
	}
}
