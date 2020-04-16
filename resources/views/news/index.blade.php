@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')

    <div class="container pt-5">
    <div class="row d-flex">
    @forelse($news as $item)
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 ">{{$categories[$item->category_id]->title}}</strong>
                        <h3 class="mb-0 yellow">{{$item->title}}</h3>
                        <div class="mb-1 text-muted">{{$item->updated_at->format('d/m')}}</div>
                        <a href="{{ route('news.show', $item->id) }}" class="stretched-link text-dark hoverYellow">Подробнее</a>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <img class="d-block" src="https://via.placeholder.com/150x100"alt="...">
                    </div>
                </div>
            </div>

    @empty
        Нет новостей
    @endforelse
        {{$news->links()}}
    </div>
    </div>
@endsection


