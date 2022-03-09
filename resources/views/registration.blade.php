@extends('layouts/app')

@section('titleblock')Реєстрація@endsection

@section('content')

<h3>Реєстрація</h3> 
            
            <form  action="{{route('registration_check')}}" method="POST">
            @csrf
            <br>
                <input type="text" size="50" name="name" placeholder="Ім'я" id='name'>
                <br>
                <br>
                <input type="text" size="50" name="username" placeholder="Логін" id='username'>
                <br>
                <br>
                <input type="password" size="50" name="password" placeholder="Пароль" id='password'>
                <br>
                <br>
                <input type="password" size="50" name='password_confirmation' placeholder="Повторіть пароль" id="repeatpass">
                <br>
                <br>
                <input type="text" size="50" name="email" placeholder="Пошта" id="email">
                <br><br>
                <input type="submit" value="Зареєструватися">
            </form>
@endsection