   $(document).ready(function(){

        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            e.preventDefault();
            var quantity = parseInt($('#quantity').val());

            $('#quantity').val(quantity + 1);

        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();e
            var quantity = parseInt($('#quantity').val());
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

    });