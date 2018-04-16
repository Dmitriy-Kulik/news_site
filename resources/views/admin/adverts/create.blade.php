@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    <h1 class="text-center">Create advert</h1>
    <form method="post" action="{{route('admin.adverts.store')}}">
        {{ csrf_field() }}
        <div class="form group">
            <label for="name">Name advert:</label>
            <input class="form-control" name="name" type="text">
        </div>
        <br>
        <div class="form group">
            <label for="html">Html advert:</label>
            <textarea class="form-control" name="html" rows="5"></textarea>
        </div>
        <div class="form group">
            <label for="place">Place advert:</label>
            <input class="form-control" name="place" type="text">
        </div>
        <br>
        <div>
            <input class="btn btn-primary form-control" type="submit" value="Add advert">
        </div>
    </form>
@endsection