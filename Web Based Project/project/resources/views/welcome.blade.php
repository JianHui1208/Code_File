<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> 
@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref" style="height:80vh; ">
            <div class="content">
                <div class="title m-b-md">
                    McDonald's
                </div>

                <div class="links">
                    <a href="{{url('/main')}}">Main Pages</a>
                    <a href="{{url('/menu')}}">Menu</a>
                    <a href="{{url('/insertFood')}}">Insert Menu</a>
                    <a href="{{url('/control')}}">Menu Controller</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@endsection