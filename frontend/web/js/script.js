$(document).ready(function () {
    $('.closed').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var product_id = $this.attr('data-product_id');
        $.ajax({
            url: '/cart/delete',
            data: {
                product_id: product_id
            }
        }).done(function () {
            $this.closest('.product-cart').remove();
        })
    });


    var owl = $('.brand-slide');
    owl.owlCarousel({
        items:5,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        dots: false
    });

});