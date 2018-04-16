@extends('admin.layouts.app_admin')

@section('content')
    @include('admin.components.head_admin_panel')

    @component('admin.components.bread')
        {{--@slot('parent') Главная @endslot--}}
        @slot('active') Категории @endslot
        {{--@slot('parent') Новости @endslot--}}
        {{--@slot('parent') Пользователя @endslot--}}
        {{--@slot('parent') Коментарии @endslot--}}
    @endcomponent

    <table class="table table-striped">
        <thead>
        <tr>
            <td>#</td>
            <td>Название категории</td>
            <td>is_guest_news</td>
            <td>is_only_moderated</td>
            <td>Дата создания</td>
            <td>Дата редактирования</td>
            <td>Дата удаления</td>
            <td>Редактировать</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category_text}}</td>
            <td>{{$category->is_guest_news}}</td>
            <td>{{$category->is_only_moderated}}</td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td>{{$category->deleted_at}}</td>
            <td>
                <a class="btn btn-default" href="{{route('admin.categories.edit', $category)}}"><i class="fa fa-edit"></i></a>
            </td>
            <td>
                <form onsubmit="if(confirm('Удалить?')){ return true} else false" action="{{route('admin.categories.destroy', $category)}}" method="post">
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
        {{ $categories -> links() }}
    </div><br>
    <div>
        <a href="/admin/categories/create">Создать</a>
    </div>
@endsection