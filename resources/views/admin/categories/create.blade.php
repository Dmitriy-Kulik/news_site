@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    <h1 class="text-center">Create categories</h1>
    <form method="post" action="{{route('admin.categories.store')}}">
        {{ csrf_field() }}
        <div class="form group">
            <label for="category_text">Name category:</label>
            <input class="form-control" name="category_text" type="text">
        </div>
        <br>
        <div class="form-group">
            <label for="is_guest_news">is_guest_news:</label>

            <input type="hidden" name="is_guest_news" value="0">
            <input type="checkbox" name="is_guest_news" value="1">
        </div>
        <div class="form-group">
            <label for="is_only_moderated">is_only_moderated:</label>

            <input type="hidden" name="is_only_moderated" value="0">
            <input type="checkbox" name="is_only_moderated" value="1">
        </div>
        <br>
        <div>
            <input class="btn btn-primary form-control" type="submit" value="Add news">
        </div>
    </form>
@endsection