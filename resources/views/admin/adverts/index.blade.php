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
            <td>Название</td>
            <td>Html</td>
            <td>Место</td>
            <td>Дата создания</td>
            <td>Дата редактирования</td>
            <td>Дата удаления</td>
            <td>Редактировать</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($adverts as $advert)
            <tr>
                <td>{{$advert->id}}</td>
                <td>{{$advert->name}}</td>
                <td>{{$advert->html}}</td>
                <td>{{$advert->place}}</td>
                <td>{{$advert->created_at}}</td>
                <td>{{$advert->updated_at}}</td>
                <td>{{$advert->deleted_at}}</td>
                <td>
                    <a class="btn btn-default" href="{{route('admin.adverts.edit', $advert)}}"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true} else false" action="{{route('admin.adverts.destroy', $advert)}}" method="post">
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
        {{ $adverts -> links() }}
    </div><br>
    <div>
        <a href="/admin/adverts/create">Создать</a>
    </div>
@endsection
