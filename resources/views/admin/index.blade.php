@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @include('admin.components.head_admin_panel')
        @component('admin.components.bread')
            @slot('active') Главная @endslot
            @slot('parent') Категории @endslot
            @slot('parent') Новости @endslot
            @slot('parent') Пользователя @endslot
            @slot('parent') Коментарии @endslot
        @endcomponent

        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Кол. категорий: {{$categories}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Кол. новостей: {{$news}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Кол. тегов: {{$tags}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Кол. польз.: {{$users}}</span></p>
                </div>
            </div>
        </div>
    </div>
@endsection