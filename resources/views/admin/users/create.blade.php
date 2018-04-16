@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

<h1 class="text-center">Add user</h1>
<form method="post" action="{{ route('admin.users.store') }}">
    {{ csrf_field() }}
    <div class="form group">
        <label for="first_name">first_name:</label>
        <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
    </div>
    <div class="form group">
        <label for="last_name">last_name:</label>
        <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
    </div>
    <div class="form group">
        <label for="email">email:</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="form group">
        <label for="password">password:</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    </div>
    <div class="form group">
        <label for="password">password:</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
    <div class="form group">
        <label for="role">role:</label>
        <input id="role" type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" required>
    </div>
    <div class="form group">
        <label for="url_avatar">Avatar:</label>
        <input id="url_avatar" type="text" class="form-control{{ $errors->has('url_avatar') ? ' is-invalid' : '' }}" name="url_avatar" value="{{ old('url_avatar') }}" required autofocus>
    </div>
    <br>
    <div>
        <input class="btn btn-primary form-control" type="submit" value="Add news">
    </div>
</form>

@endsection