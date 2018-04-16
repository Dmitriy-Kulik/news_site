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

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <td>#</td>
            <td>Название</td>
            <td>Теги</td>
            <td>Опубликовано</td>
            <td>Дата создания</td>
            <td>Дата редактирования</td>
            <td>Дата удаления</td>
            <td>Редактировать</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $n)
            <tr>
                <td>{{$n->id}}</td>
                <td>{{$n->news_title}}</td>
                <td>
                    <div class="dropdown">
                        <span data-target="#" href="" data-toggle="dropdown" class="dropdown-toggle">
                            Теги новости
                            <b class="caret"></b>
                        </span>
                        <ul class="dropdown-menu" style="margin-left: 90px;">
                            @foreach($n->tag as $tag)
                                <li><a href="#">{{$tag->tag_text}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </td>
                <td>{{$n->is_visible}}</td>
                <td>{{$n->created_at}}</td>
                <td>{{$n->updated_at}}</td>
                <td>{{$n->deleted_at}}</td>
                <td>
                    <a class="btn btn-default" href="{{route('admin.news.edit', $n)}}"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true} else false" action="{{route('admin.news.destroy', $n)}}" method="post">
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
        {{ $news -> links() }}
    </div>
    <div>
        <a href="/admin/news/create">Создать</a>
    </div>
@endsection