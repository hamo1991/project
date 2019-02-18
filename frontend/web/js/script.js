$(document).ready(function () {
    var owl = $('.brand-slide');
    owl.owlCarousel({
        items:5,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        dots: false
    });

    $('form.search-wrap').submit(function (ev) {
        if($('#products-search').length){
            ev.preventDefault();
            var href= $(this).attr('action') + '?search=' + $(this).find('.search').val();
            $('#products-search').append('<a id="search-link" href="'+href+'"></a>');
            $('#search-link').click();
        }
    });

});