@extends('app')
@section('content')

<div class="container fluid">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">{{ $item->item_name }}</div>
	<div class="panel-body">
	{!! link_to_route('item.show', $item->item_name, [$item->id]) !!} - {{ $item_store->item_name }} - {{ $item_store->item_id }}
	</div>
	</div>
	</div>
	</div>
	</div>

@endsection