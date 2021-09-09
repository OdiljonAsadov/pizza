$(document).ready(function ()  {

    $('.addToCartBtn').click(function (e) {
        e.preventDefault();

        var prod_id = $('.product_id').val()

    //   alert(prod_id)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'prod_id': prod_id,
            },
            success: function (response) {
                swal(response.status);
            }
        });
      
        
    })
});