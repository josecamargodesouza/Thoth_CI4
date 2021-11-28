//<![CDATA[
$(window).on('load', function () {
    $('#preloader .inner').fadeOut(3500);
    $('#preloader').delay(3500).fadeOut('slow');
    $('.home').delay(3500).css({ 'overflow': 'visible' });
});

