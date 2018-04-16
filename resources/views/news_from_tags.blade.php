@extends('layouts.my_app')

@section('content')
    <h1 class="flex-center">#{{$tag->tag_text}}</h1>
        @foreach($tag->news as $n)
            <div class="list-group-item text-left" style="border-radius: 5px">
                <div>
                <img class="img-rounded" src="{{$n->url_img_news}}" alt="img" style="height: 70px;">
                <a href="/categories/news/{{$n->id}}">{{$n->news_title}}</a>
                </div>
            </div><br>
        @endforeach
@endsection