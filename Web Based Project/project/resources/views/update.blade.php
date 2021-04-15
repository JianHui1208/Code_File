@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <h2>Edit Food</h2>
        @foreach($SFoods as $MFood)
        <form class="subform"  method="post" action="{{ route('update.food') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
                        <div class="">
                            <label>Food ID</label>
                            <input type="text" name="id" value="{{$MFood->id}}" readonly>
                        </div>
                        <br>
                        <div class="">
                            <label>Food Name</label>
                            <input type="text" name="FoodName" value="{{$MFood->FoodName}}">
                        </div>
                        <br>
                        <div class="">
                            <label>Food Price</label>
                            <input type="text" name="FoodPrice" value="{{$MFood->FoodPrice}}">
                        </div>
                        <br>
                        <div class="">
                            <label>Food Image</label>
                            <input type="file" name="FoodImage" value="">
                        </div>
                        <br>
                        <div class="">
                            <label>Food Category</label>
                            <select name="FoodCategory" name="FoodCategory">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option  value="{{ $category->id }}"
                                @if($MFood->FoodCategory==$category->id)
                                selected                    
                                @endif
                                >{{ $category->FoodCategory }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Submit">
                        </div>
        </form>
        @endforeach
    </div>
@endsection