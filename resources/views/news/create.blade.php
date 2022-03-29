@extends('layouts/app')
@section('titleblock')Авторизація @endsection
@section('content')
<@include('layouts.side_panel')

<div class="main">
<form  action="{{route('news.store')}}" enctype="multipart/form-data" method="POST">
        @csrf

    <input type="text" size="50" name='title' placeholder="Заголовок">
        <br><br>
        <textarea size="100"  style=" height: 200px;width: 370px;" name='content' placeholder='Текст новини'></textarea>
        <br><br>
        <input type="text" size="50" name="foto" id="foto" placeholder="URL фотографії">
        <br><br>
        <input type="submit" value="Добавити новину">
    </form>
    </div>
    @endsection
