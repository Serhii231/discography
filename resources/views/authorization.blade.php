@extends('layouts/app')
@section('titleblock')Авторизація @endsection
@section('content')
<h3>Авторизація</h3>

@if(!empty($errors) && $errors->any())
            <div>
                <div class="font-medium text-red-600">
                    {{ __('Whoops! Something went wrong.') }}
                </div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600" style="color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
<div class="main">
    <div class="form-controls"></div>
    <form action="{{route('authorization_submit')}}" method = "POST">
        @csrf
        <div class="form-group" >
            <input class="form-control" type="text" name = "username" placeholder="Логін">
            <br>
            <br>
            <input class="form-control" type="password" name='password' placeholder="Пароль">
            <br><br>
            <input class="form-control" type="submit" value = "Увійти">
        </div>
    </form>
</div>
@endsection
