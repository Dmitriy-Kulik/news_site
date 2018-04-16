@if(Auth::user()->role == 'admin')
    <ol class="breadcrumb" style="margin-top: 20px">
        <li><a href="{{route('admin.index')}}">{{$active}}</a></li>
        <li><a href="{{route('admin.categories.index')}}">Категории</a></li>
        <li><a href="{{route('admin.news.index')}}">Новости</a></li>
        <li><a href="{{route('admin.tags.index')}}">Теги</a></li>
        <li><a href="{{route('admin.users.index')}}">Пользователи</a></li>
        <li><a href="{{route('admin.adverts.index')}}">Реклама</a></li>
        <li><a href="{{route('admin.comments.index')}}">Коментарии</a></li>
    </ol>
@endif