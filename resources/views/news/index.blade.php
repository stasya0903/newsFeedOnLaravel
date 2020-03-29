@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @forelse($news as $item)
        {{$item['title']}}<a href="{{ route('news.show', $item['id']) }}">Подробнее...</a><br>
        <hr>
    @empty
        Нет новостей
    @endforelse
@endsection

@section('footer')
    @include('footer')
@endsection
