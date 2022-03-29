@extends('layouts/app')
@section('titleblock')Авторизація @endsection
@section('content')
    <@include('layouts.side_panel')
    @foreach($news as $new)
    <div class="main">
        <form  action="{{ route('news.update', ['id' => $new->id]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="text" size="50" name='title' value="{{ $new->title }}" placeholder="Заголовок">
            <br><br>
            <textarea size="100"  style=" height: 200px;width: 370px;" name='content' value="{{ $new->content }}" placeholder='Текст новини'> {{ $new->content }}</textarea>
            <br><br>
            <input type="text" size="50" name="foto" id="foto" value="{{ $new->foto }}" placeholder="URL фотографії">
            <br><br>
            <input type="submit" value="Зберегти">
        </form>
        @endforeach
    </div>
@endsection
