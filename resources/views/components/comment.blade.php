@foreach($items as $item)
    <div class="comments">
        <li class="media">
            <li id="li-comment-{{$item->id}}" class="comment">
                <div id="comment-{{$item->id}}" class="">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-rounded" src="{{asset('images/default_avatar.png')}}" alt="...">
                            <cite class="fn">{{$item->name}}</cite>
                        </a>
                    </div>

                    <div class="media-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="author">Дима</div>
                                <div class="metadata">
                                    <span class="date">{{ is_object($item->created_at) ? $item->created_at->format('d.m.Y в H:i') : ''}}</span>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="media-text text-justify">{{$item->comment_text}}</div>
                            </div>
                            <div class="panel-footer">
                                <span class="vote plus" title="Нравится">
                                    <i class="fa fa-thumbs-up"></i>
                                </span>
                                <span class="rating">
                                    +1
                                </span>
                                <span class="vote minus" title="Не нравится">
                                    <i class="fa fa-thumbs-down"></i>
                                </span>
                                <span class="devide">
                                    |
                                </span>
                                <a class="btn btn-warning comment-reply" href="#">Редактировать</a>
                                <a class="btn btn-primary comment-reply" href="#" style="float: right;">Ответить</a>
                            </div>
                        </div>
                    </div>
                    @if(isset($com[$item->id]))
                        <ul class="children">
                            @include(env('THEME').'.components.comment', ['items' => $com[$item->id]])
                        </ul>
                    @endif
                </div>
            </li>
        </li>
    </div>
@endforeach

