@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('articles.create') }}">Создать статью</a>
    </div>
    <br>
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', ['id' => $article['id']]) }}">{{$article->name}}</a></h2>
        <br>
        <a href="{{ route('articles.destroy', ['id' => $article['id']]) }}" data-method="delete" rel="nofollow">Удалить</a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection