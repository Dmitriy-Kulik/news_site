@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    <h1 class="text-center">Create news</h1>
    <form method="post" action="{{route('admin.news.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="category_text">Example select</label>
            <select class="form-control" id="category_text" name="category_text">
                @foreach($category_text as $text)
                    <option>{{$text->category_text}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tag_text">Example select</label>
            <select class="form-control" id="tag_text" name="tag_text">
                @foreach($tag_text as $text)
                    <option>{{$text->tag_text}}</option>
                @endforeach
            </select>
        </div>
        <div class="form group">
            <label for="news_title">Title:</label>
            <input class="form-control" name="news_title" type="text">
        </div>
        <div class="form group">
            <label for="url_img_news">url_img_news:</label>
            <input class="form-control" name="url_img_news" type="text">
        </div>
        <div class="form group">
            <label for="news_content">Content:</label>
            <textarea class="form-control" name="news_content" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="is_visible">is_visible:</label>
            <input type="hidden" name="is_visible" value="0">
            <input type="checkbox" name="is_visible" value="1">
        </div>
        <br>
        <div>
            <input class="btn btn-primary form-control" type="submit" value="Add news">
        </div>
    </form>
@endsection