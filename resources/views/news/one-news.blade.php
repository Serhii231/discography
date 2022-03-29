@extends('layouts/app')

@section('titleblock')Новини @endsection

@section('content')

    @foreach($news as $new)

    <div class="container">
        <h4 style="text-align: center"> {{ $new->title }}</h4> <br>
        <img class="rounded mx-auto d-block" style="width: 600px; height: 300px;" src={{$new->foto}} > <br>
        {{ $new->content }}
    </div>
    @endforeach
@endsection
