@extends('layouts.app')
@section('content')
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('addFoodCategory.store') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<p>
		<label for="ID" class="label">Food ID</label>
		<input type="text" name="FoodID" id="ID" placeholder="XXXX">
	</p>
	<p>
		<label for="name" class="label">Food Category</label>
		<input type="text" name="FoodCategory" id="name">
	</p>
	<p>
		<input type="submit" name="insert" value="Insert">
	</p>
</form>
</div>
@endsection