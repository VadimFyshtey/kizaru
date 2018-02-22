$(document).ready(function(){
    $('.carusel').slick({
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        prevArrow: '<i class="slick-prev glyphicon glyphicon-chevron-left"></i>',
        nextArrow: '<i class="slick-next glyphicon glyphicon-chevron-right"></i>',
    });

    $('.carusel_popul').slick({
        adaptiveHeight: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: '<button class="slick-prev"><i class="glyphicon glyphicon-chevron-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="glyphicon glyphicon-chevron-right"></i></button>',
        responsive: [{

            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                infinite: true,
                dots: false
            }

        }, {

            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                dots: false
            }

        }, {

            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                dots: false
            }

        }]
    });

    $('body').on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

});

