@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    <h1 class="text-center">Edit categories</h1>
    {{$category->id}}
    <form method="post" action="{{route('admin.categories.update', $category)}}">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="form group">
            <label for="category_text">Edit category:</label>
            <input class="form-control" name="category_text" type="text" value="{{$category->category_text or ""}}">
        </div>
        <br>
        <div class="form-group">
            <label for="is_guest_news">is_guest_news:</label>
            <input type="hidden" name="is_guest_news" value="0" {{ $category->is_guest_news ? 'checked="checked" ' : '' }}>
            <input type="checkbox" name="is_guest_news" value="1" {{ $category->is_guest_news ? 'checked="checked" ' : '' }}>
        </div>
        <div class="form-group">
            <label for="is_only_moderated">is_only_moderated:</label>

            <input type="hidden" name="is_only_moderated" value="0" {{ $category->is_only_moderated ? 'checked="checked" ' : '' }}>
            <input type="checkbox" name="is_only_moderated" value="1" {{ $category->is_only_moderated ? 'checked="checked" ' : '' }}>
        </div>
        <br>
        <div>
            <input class="btn btn-primary form-control" type="submit" value="Add news">
        </div>
    </form>
@endsection