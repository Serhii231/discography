@extends('layouts/app')
@section('titleblock')Новини @endsection
@section('content')
<p> <div class="container">
    @foreach ($news as $new)
        {{$new->title}} <br>
        <img src={{$new->foto}}>
        {{$new->content}}<br>
        {{$new->created_at}}<hr>
    @endforeach
</div></p>
@endsection