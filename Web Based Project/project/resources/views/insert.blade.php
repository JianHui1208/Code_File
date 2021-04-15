@extends('layouts.app')
@section('content')
<script>
@if(Session::has('success'))
	toastr.success('{{ Session::get('success')}}')
@endif
</script>
    <div class="wrapper">
        <h2>Insert Food</h2>
        <form class="subform"  method="post" action="{{ route('addFood.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
            <!-- <div class="">
                <label>Food ID</label>
                <input type="text" name="FoodID" value="" placeholder="XXX">
            </div> -->
            <br>
            <div class="">
                <label>Food Name</label>
                <input type="text" name="FoodName" value="">
            </div>
            <br>
            <div class="">
                <label>Food Price</label>
                <input type="text" name="FoodPrice" value="">
            </div>
            <br>
            <div class="">
                <label>Food Image</label>
                <input type="file" name="FoodImage" value="">
            </div>
            <br>
            <div class="">
                <label>Food Category</label>
                <select name="FoodCategory">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
					<option  value="{{ $category->id }}">{{ $category->FoodCategory }}</option>
				    @endforeach
                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit">
            </div>

            
        </form>
    </div>
@endsection