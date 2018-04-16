<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{$main_news[0]->url_img_news}}" alt="Second slide">
            <div class="carousel-caption">
                <h3><a class="text_carousel" href="/categories/news/{{$main_news[0]->id}}">{{$main_news[0]->news_title}}</a></h3>
                <p>...</p>
            </div>
        </div>
        <div class="item">
            <img src="{{$main_news[1]->url_img_news}}" alt="Second slide">
            <div class="carousel-caption">
                <h3><a class="text_carousel" href="/categories/news/{{$main_news[1]->id}}">{{$main_news[1]->news_title}}</a></h3>
                <p>...</p>
            </div>
        </div>
        <div class="item">
            <img src="{{$main_news[2]->url_img_news}}" alt="Third slide">
            <div class="carousel-caption">
                <h3><a class="text_carousel" href="/categories/news/{{$main_news[2]->id}}">{{$main_news[2]->news_title}}</a></h3>
                <p>...</p>
            </div>
        </div>
        <div class="item">
            <img src="{{$main_news[3]->url_img_news}}" alt="Third slide">
            <div class="carousel-caption">
                <h3><a class="text_carousel" href="/categories/news/{{$main_news[3]->id}}">{{$main_news[3]->news_title}}</a></h3>
                <p>...</p>
            </div>
        </div>
        <div class="item">
            <img src="{{$main_news[4]->url_img_news}}" alt="Third slide">
            <div class="carousel-caption">
                <h3><a class="text_carousel" href="/categories/news/{{$main_news[4]->id}}">{{$main_news[4]->news_title}}</a></h3>
                <p>...</p>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>