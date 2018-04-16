@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    <h1 class="text-center">Edit user</h1>
    <form method="post" action="{{ route('admin.users.update', $users) }}">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="form group">
            <label for="first_name">first_name:</label>
            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{$users->first_name or ""}}" required autofocus>
        </div>
        <div class="form group">
            <label for="last_name">last_name:</label>
            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{$users->last_name or ""}}" required autofocus>
        </div>
        <div class="form group">
            <label for="email">email:</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$users->email or ""}}" required>
        </div>
        <div class="form group">
            <label for="password">password:</label>
            <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{$users->password or ""}}" required>
        </div>
        <div class="form group">
            <label for="password">password:</label>
            <input id="password-confirm" type="text" class="form-control" name="password_confirmation" value="{{$users->password or ""}}" required>
        </div>
        <div class="form group">
            <label for="role">Role:</label>
            <input id="role" type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{$users->role or ""}}" required>
        </div>
        <div class="form group">
            <label for="url_avatar">url_avatar:</label>
            <input id="url_avatar" type="text" class="form-control{{ $errors->has('url_avatar') ? ' is-invalid' : '' }}" name="url_avatar" value="{{$users->url_avatar or ""}}" required>
        </div>
        <br>
        <div>
            <input class="btn btn-primary form-control" type="submit" value="Edit user">
        </div>
    </form>

@endsection