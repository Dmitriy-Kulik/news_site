@extends('admin.layouts.app_admin')

@section('content')
    @include('admin.components.head_admin_panel')

    @component('admin.components.bread')
        @slot('active') Главная @endslot
        @slot('parent') Категории @endslot
        @slot('parent') Новости @endslot
        @slot('parent') Пользователя @endslot
        @slot('parent') Коментарии @endslot
    @endcomponent

    {{Auth::user()->role}}

    <table class="table table-striped">
        <thead>
        <tr>
            <td>#</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Email</td>
            <td>Роль</td>
            <td>Дата создания</td>
            <td>Дата редактирования</td>
            <td>Дата удаления</td>
            <td>Редактировать</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>{{$user->deleted_at}}</td>
                <td>
                    <a class="btn btn-default" href="{{route('admin.users.edit', $user)}}"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true} else false" action="{{route('admin.users.destroy', $user)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                        {{ csrf_field() }}
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $users -> links() }}
    </div>
    <div>
        <a href="{{route('admin.users.create')}}">Создать</a>
    </div>
@endsection