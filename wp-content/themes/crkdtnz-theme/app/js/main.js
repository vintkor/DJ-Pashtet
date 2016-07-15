/*_____________________________Background video_________________________________*/

$(document).ready(function() {
    $('#my-video').backgroundVideo({
        pauseVideoOnViewLoss: false
    });
});

/*-------------------------------- Плавная анимация на вторую секцию ---------------------------------*/
 
$(document).ready(function() {
    $(".bounce, .top-menu").on("click", "a", function(event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 800 мс
        $('body,html').animate({ scrollTop: top }, 800);
    });
});


/*-------------------------------- Скрипт перехода по пунктам меню ---------------------------------*/

jQuery(function($){
    $(document).ready(function() {
        $('.wrapper-menu').stickUp({ 
            parts: { 
                0: 'section-2',
                1: 'section-2',
                2: 'section-3',
                3: 'section-4',
                4: 'section-5',
                5: 'section-6'
            },
            itemClass: 'menuItem',
            itemHover: 'active'
        });
    });
});