<style>
    table{
        text-align: center;
        position: absolute;
        left: 270px;
    }</style>
@extends('layouts.app')
@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
<h1>Edit Pages</h1>
<div style="padding-top: 10px;">
    <table>
        <tr>
            <td>FoodID</td>
            <td>FoodName</td>
            <td>FoodPrice</td>
            <td>FoodImage</td>
            <td>FoodCategory</td>
            <td>Settings</td>
        </tr>
        @foreach($SFoods as $MFood)
        <tr>
            <td>{{$MFood->id}}</td>
            <td>{{$MFood->FoodName}}</td>
            <td>RM{{$MFood->FoodPrice}}</td>
            <td>{{$MFood->FoodImage}}</td>
            <td>{{$MFood->CatName}}</td>
            <td>
            <a href="{{ route('edit.food', ['id' => $MFood->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
            <a href="{{ route('delete.food', ['id' => $MFood->id]) }}" class="btn btn-danger" onclick="return confirm('Sure You Want Delete?')"><i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection