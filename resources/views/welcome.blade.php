<!DOCTYPE html>
<html lang="ja">

    <head>

        <meta charset="utf-8">
        <title>YouTubeまとめ×SNS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-warning">

        <div class="text-center text-white">
            <h1>YouTubeまとめ × SNS</h1>
        </div>

    </div>
    
    <div class="text-right">

        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif

    </div>
 
    @include('users.users',['users'=>$users])

@endsection

</html>