$(document).ready(function () {
    $('.closed').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var product_id = $this.attr('data-product_id');
        $.ajax({
            url: HOME_URL + '/site/update-cart',
            data: {
                qty: 0,
                product_id: product_id
            }
        }).done(function () {
            $this.closest('.product-cart').remove();
        })
    });



    $('.addtocart').click(function () {

        var quantity = $('#quantity').val();
        $.ajax({
            url: HOME_URL + '/site/cart',
            data: {
                quantity: quantity

            }
        })
    });


});