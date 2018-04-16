@extends('admin.layouts.app_moderator')

@section('content')

<h1>Редактирование комментариев</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <td>#</td>
            <td>Id новости</td>
            <td>Id создавшего</td>
            <td>Родительский комментарий</td>
            <td>Текст комментария</td>
            <td>Опубликован</td>
            <td>Дата создания</td>
            <td>Дата редактирования</td>
            <td>Дата удаления</td>
            <td>Редактировать</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->id_news}}</td>
                <td>{{$comment->id_user}}</td>
                <td>{{$comment->id_comment}}</td>
                <td>{{$comment->comment_text}}</td>
                <td>{{$comment->visible_at}}</td>
                <td>{{$comment->created_at}}</td>
                <td>{{$comment->updated_at}}</td>
                <td>{{$comment->deleted_at}}</td>
                <td>
                    <a class="btn btn-default" href="{{route('admin.moderator.user.edit', $comment)}}"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true} else false" action="{{route('admin.moderator.user.destroy', $comment)}}" method="post">
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
        {{ $comments -> links() }}
    </div><br>
@endsection