{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<h1>Edit news</h1>--}}
    {{--</div>--}}

{{--@endsection--}}

@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    <h1 class="text-center">Edit news</h1>
    <form method="post" action="{{route('admin.news.update', $news)}}">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="category_text">Example select</label>
            <select class="form-control" id="category_text" name="category_text">
                <option selected>{{$category}}</option>
                @foreach($c_all as $text)
                    <option >{{$text->category_text}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tag_text">Example select</label>
            <select class="form-control" id="tag_text" name="tag_text">
                <option selected>{{$tag}}</option>
                @foreach($t_all as $text)
                    <option >{{$text->tag_text}}</option>
                @endforeach
            </select>
        </div>
        <div class="form group">
            <label for="news_title">Title:</label>
            <input class="form-control" name="news_title" type="text" value="{{$news->news_title or ""}}">
        </div>
        <div class="form group">
            <label for="url_img_news">url_img_news:</label>
            <input class="form-control" name="url_img_news" type="text" value="{{$news->url_img_news or ""}}">
        </div>
        <div class="form group">
            <label for="news_content">Content:</label>
            <textarea class="form-control" name="news_content" rows="5">{{$news->news_content or ""}}</textarea>
        </div>
        <div class="form-group">
            <label for="is_visible">is_visible:</label>
            <input type="hidden" name="is_visible" value="0" {{ $news->is_visible ? 'checked="checked" ' : '' }}>
            <input type="checkbox" name="is_visible" value="1" {{ $news->is_visible ? 'checked="checked" ' : '' }}>
        </div>
        <br>
        <div>
            <input class="btn btn-primary form-control" type="submit" value="Edit news">
        </div>
    </form>

@endsection