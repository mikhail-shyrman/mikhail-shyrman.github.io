$('.slider').slick({
    slidesToShow: 1,
    dots: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    fade: false
});


//videoPopup
$("a.vid").YouTubePopUp();


// GoogleMaps
if ($(".map-canvas").length > 0) {
    setTimeout(function () {
        initializeMap();
    }, 500);
}


// GoogleMap
function initializeMap() {
    let myCenter = new google.maps.LatLng(40.780747, -73.929918);

    let mapProp = {
        center: myCenter,
        zoom: 16,
        draggable: false,
        scrollwheel: false,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    let map = new google.maps.Map(document.getElementById("map-canvas"), mapProp);
}


//Menu for 992px
function menu(){
    $('.menu ul').slideToggle();
}
$('.buttonMenu').click(menu);


$(".menu").on("click","a", function (event) {
    //отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();
    //забираем идентификатор бока с атрибута href
    var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;
    //анимируем переход на расстояние - top за 1500 мс
    $('body,html').animate({scrollTop: top}, 1500);
});