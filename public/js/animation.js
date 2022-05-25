$(document).ready(function() {
    // Banniere GIF entreprises
    $('.pub-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    // Animation entreprises a la une
    $('.entreprises-container').slick({
        rows: 2,
        slidesPerRow: 5,
        autoplay: true,
        autoplaySpeed: 4000,
        centerMode: true,
        arrows: true,
        nextArrow: '#arrow-right',
        prevArrow: '#arrow-left',
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesPerRow: 4,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesPerRow: 3,
                }
            }
        ],
    });
});

// JS animation NAV
$(document).ready(function() {
    $(window).scroll(function() {
        if (this.scrollY < 400) {
            $('.list').removeClass("hide");
            $('.search-box').removeClass("show");
        } else {
            $('.list').addClass("hide");
            $('.search-box').addClass("show");
        }
    });
});