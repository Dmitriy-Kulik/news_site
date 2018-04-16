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

    <h1>Tag list</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <td>#</td>
            <td>created_user_id</td>
            <td>tag_text</td>
            <td>Дата создания</td>
            <td>Дата редактирования</td>
            <td>Дата удаления</td>
            <td>Редактировать</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->created_user_id}}</td>
                <td>{{$tag->tag_text}}</td>
                <td>{{$tag->created_at}}</td>
                <td>{{$tag->updated_at}}</td>
                <td>{{$tag->deleted_at}}</td>
                <td>
                    <a class="btn btn-default" href="{{route('admin.tags.edit', $tag)}}"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true} else false" action="{{route('admin.tags.destroy', $tag)}}" method="post">
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
        {{ $tags -> links() }}
    </div><br>
    <div>
        <a href="/admin/tags/create">Создать</a>
    </div>

@endsection