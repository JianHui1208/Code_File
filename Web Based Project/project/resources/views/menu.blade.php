@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="our-webcoderskull padding-lg" style="text-align:center;"> 
    <h2>Menu</h2>
    <div class="container">
        <div style="text-align:center; padding-bottom: 60px;">
            <div style="text-align:right;">
                <form action="{{ route('search.food') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="searchFood" id="searchFood">
                        <button class="btn btn-info" type="submit">Search</button>
                </form>
            </div>
        </div>
        <ul class="row" style="list-style:none;">
        @foreach($SFoods as $MFood)
        <li class="col-12 col-md-6 col-lg-3" style="text-align:center">
            <div class="cnt-block equal-hight" style="height: 349px;">
                <figure><img src="{{ asset('images/')}}/{{$MFood->FoodImage}}" style="width: 50%;"></figure>
                <h3>{{$MFood->FoodName}}</h3>
                <p>RM{{$MFood->FoodPrice}}</p>
                <p>{{$MFood->CatName}}</p>
            </div>
        </li>
        @endforeach
        </ul>
    </div>
</section>
@endsection