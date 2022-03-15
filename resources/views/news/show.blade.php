@extends('layouts/app')

@section('titleblock')Панель адміністратора @endsection

@section('content')
<div class="container">
    @include('layouts.side_panel')
    @include('layouts.allerts')
    
    <div class="main">
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($news as $new)
                <tr>
                <th scope="row">{{ $new->id }}</th>
                <td><a href="">{{$new->title}}</a></td>
                <td>{{$new->created_at}}</td>
                <td><a href="{{ route('news.toggle_status', ['id' => $new->id]) }}"> {{ $new->publish ? 'Опубліковано' : 'Не опубліковано' }} </a></td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
</div> 
@endsection

@push('javascript')
<script src="/js/publish.js"></script>
@endpush
@push('javascript')
<script ></script>
@endpush