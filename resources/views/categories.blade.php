@extends('layouts.my_app')

@section('content')
    <h1 class="flex-center">Categories</h1>

    <div class="list-group">
        @forelse($category as $c)
            <a href="/categories/{{$c->id}}" class="list-group-item">{{$c->category_text}} <span class="badge">{{count($c->news)}}</span></a><br><br>
            <div class="list-unstyled">
                <ul>
                @foreach ($news->news as $n)
                    <li><a href="news/{{$n->id}}">{{ $n->news_title }}</a></li>
                @endforeach
                </ul>
            </div>

        @empty
        @endforelse
            {{--{{$news->render()}}--}}
    </div>
@endsection