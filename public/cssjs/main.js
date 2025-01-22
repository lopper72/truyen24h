$(".mySlide").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow:
        '<div class="slickArrow slickNext"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
    prevArrow:
        '<div class="slickArrow slickPrev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
    autoplay: true,
    arrows: true,
    autoplaySpeed: 3000,
    responsive: [
        {
        breakpoint: 1025,
            settings: {
                slidesToShow: 3,
            },
        },
        {
        breakpoint: 992,
            settings: {
                slidesToShow: 2,
            },
        },
        {
        breakpoint: 600,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});
function showMenuMobile() {
    $("#menuMobile").addClass("showMenu");
}
function hideMenuMobile() {
    $("#menuMobile").removeClass("showMenu");
}
function displaySearch() {
    if ($('.searchPage').attr("class").includes("showSearch")) {
        $('.searchPage').removeClass("showSearch");
    } else {
        $('.searchPage').addClass("showSearch");
    }
}
const scrollToTopBtn = document.getElementById('scrollToTopBtn');
window.addEventListener('scroll', function() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
});
scrollToTopBtn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});