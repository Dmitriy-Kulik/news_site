@foreach($adverts as $advert)
    <div style="width: 100%; height: 100%; border: 4px double black; border-radius: 5px">
        <div style="background: bisque; height: 200px">
            <div style="padding-top: 30px">
                <span style="margin: auto 0;">{!!$advert->html!!}</span>
                Цена: <span class="left_adv">1000</span>
            </div>
        </div>
    </div>
    <br>
@endforeach

{{--Здесь может быть ваша реклама!--}}

{{--название товара(услуги), цена, фирма(сайт)-продавец--}}