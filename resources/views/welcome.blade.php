@extends('layouts.app')
@section('content')
    <h3>Статьи</h3>
    @auth
        <a href="{{route('addtext')}}" class="btn btn-success">Добавить новую статью</a>
    @endauth
    <a href="{{route('article-menu')}}" class="btn btn-success">Управление статьями</a>
    @foreach($articles as $article)
        @include('blog.cardblog')
    @endforeach
    {{$articles->links()}}

@endsection
