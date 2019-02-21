   $(document).ready(function(){

        $('.quantity-right-plus').click(function(e){

            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            var max = parseInt($('#quantity').attr('max'));
            if (quantity >= max) {
                return;
            }
            $('#quantity').val(quantity + 1);

        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if (quantity === 1) {
                return;
            } else if(quantity>1){
                $('#quantity').val(quantity - 1);

            }
        });

    });