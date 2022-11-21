@extends('layouts.app')

@section('header', 'О блоге')

@section('content')
<p>Эксперименты с Laravel на Хекслете</p>
<p>{{ implode(', ', $tags) }}</p>
@endsection