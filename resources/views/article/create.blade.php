@extends('layouts.app')

@section('content')
    @if(!empty($errors))
        <ul>
        @foreach ($errors->all() as $key => $value)
            <li>{{ $value }}</li>
        @endforeach
        </ul>
    @endif
    {{ Form::model($article, ['route' => 'articles.store']) }}
        {{ Form::label('name', 'Название') }}
        {{ Form::text('name') }}<br>
        {{ Form::label('body', 'Содержание') }}
        {{ Form::textarea('body') }}<br>
        {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection