@extends('layouts.app')

@section('content')
    <a href="{{ route('articles.edit', ['id' => $article['id']]) }}">Редактировать</a>
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection