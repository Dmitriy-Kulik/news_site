$(document).ready(function(){
    setInterval(function(){
        var count =  +$('#count_readers').text();
        var reading = Math.round(0 + Math.random() * (5 - 0));

        count += reading;

        $('#reading').text(reading);
        $('#count_readers').text(count);


        var news_id = $('#news_id').attr('alt')

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        $.ajax({
            method: "GET",
            url: "api/write_count_reading",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache: false,
            data: {
                'arr': [news_id, reading],
                'count': count
            },
            dataType: 'json',
            success: function (response) {
                //$('#result').html(response['msg']);
                //console.log(response);
                console.log(response);//[0]['count_readers']
            },
            error: function (data) {
                console.log('Error:');
            }
        });

        $.get(
            "api/write_count_reading",
            {
                param1: "param1",
                param2: 2
            },
            onAjaxSuccess
        );

        function onAjaxSuccess(data)
        {
            // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
            console.log(data);
        }

    }, 3000);
});