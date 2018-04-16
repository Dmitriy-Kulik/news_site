@extends('layouts.my_app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="container"><br>
                <div class="text-center">
                    <img id="news_id" src="{{$news->url_img_news}}" class="img-rounded" alt="{{$news->id}}" style="width: 100%;">
                </div>
                <h3>{{$news->news_title}}</h3>
                <div style="text-align: justify">
                    @if(!Auth::user())
                        {{str_limit($news->news_content, 500)}}<br><br><br>
                        <span style="color: red">Хотите увидеть полный текст новости? Тогда зарегитсрируйтесь или авторезируйтесь!</span>
                    @else
                        {{$news->news_content}}
                    @endif
                </div>
                <br>
                <br>
                <br>
                <div class="text-left">
                    @foreach($news->tag as $t)
                        #<a href="/tag/{{$t->id}}">{{$t->tag_text}}</a>
                    @endforeach
                </div>
            </div><br>

            <div style="height: 50px; width: 200px; background: beige; border: 1px solid #636b6f; border-radius: 5px">
                <div style="text-align: left; padding-left: 10px">
                    <span style="font-size: 10px">Количество читающих:  </span><span id="reading"></span><br>
                    <span style="font-size: 10px">Общее количество прочитавших:  </span><span id="count_readers">0</span>
                </div>

            </div>
            @include('components.count')
            <br>
        </div>
    </div>

    @if(Auth::user())
        <div class="container text-left">
            <div id="comments">
                <h3 class="title-comments">Комментарии ({{count($post->comments)}})</h3>
                <ol class="commentlist group">
                @foreach($com as $k => $comments)
                    <!--Выводим только родительские комментарии parent_id = 0-->
                        @if($k)
                            @break
                        @endif
                        @include('components.comment', ['items' => $comments])
                    @endforeach
                </ol>
            </div>
        </div><br>
    @else
        <span style="color: red; float: left">Комментарии могут видеть только зарегистрированные пользователи!</span>
    @endif
        <script src="{{ asset('js/reading.js') }}" defer></script>
@endsection