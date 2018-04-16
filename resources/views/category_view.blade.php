@extends('layouts.my_app')

@section('content')

    <h1 class="flex-center">Categories</h1>

    <div class="list-group">
        @foreach($categories as $category)
            <h2><a href="/categories/{{$category->id}}" class="list-group-item">{{$category->category_text}} <span class="badge">{{count($category->news)}}</span></a></h2><br>
            <div class="panel panel-default">
                <ul class="list-unstyled" style="text-align: left; padding-left: 20px">
                @foreach ($category->news as $news1)
                    <li><h4><a href="/categories/news/{{$news1->id}}">{{ $news1->news_title }}</a></h4></li>
                @endforeach
                </ul>
            </div>
        @endforeach
    </div>
@endsection