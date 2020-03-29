@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @forelse($categories as $item)
        <a href="{{ route('news.categories.show', $item['name']) }}">{{$item['name']}}</a><br>
        <hr>
    @empty
        Нет новостей
    @endforelse
@endsection

@section('footer')
    @include('footer')
@endsection
