@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    <h1 class="text-center">Create tag</h1>
    <form method="post" action="{{route('admin.tags.store')}}">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="form group">
            <label for="tag_text">Name category:</label>
            <input class="form-control" name="tag_text" type="text">
        </div>
        <br>
        <div>
            <input class="btn btn-primary form-control" type="submit" value="Add news">
        </div>
    </form>
@endsection