$(document).ready(function() {

    $(window).scroll(function() {

        if (this.scrollY > 400) {
            $('.scroll-up-btn').addClass("show");

        } else {
            $('.scroll-up-btn').removeClass("show");
        }
        if (this.scrollY > 0) {
            $('.menu').addClass("change-menu");

        } else {
            $('.menu').removeClass("change-menu");
        }

    });
    $('.scroll-up-btn').click(function() {
        $('html').animate({ scrollTop: 0 });
        $('html').css("scrollBehavior", "auto");
    });

});