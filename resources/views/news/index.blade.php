@extends('layouts/app')
@section('titleblock')Новини @endsection
@section('content')
<p> <div class="container">
    @foreach ($news as $new)
        @if($new->publish == true)
           <h4 style="text-align: center"> <a href="{{ route('news.one', ['slug' => $new->slug]) }}">{{$new->title}}</a></h4> <br>
            <img class="rounded float-left" style="width: 300px; height: 200px;" src={{$new->foto}} >
            <p>{{Str::words($new->content, 120)}}</p><br>
            <p style="text-align: end">  {{$new->created_at}}</p><hr>
        @endif
    @endforeach
</div></p>
@endsection
