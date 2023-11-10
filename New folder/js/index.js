$(function(){

    //variables
    let minusBtn    = $('#minus');
    let plusBtn     = $('#plus');
    let prodCounter = $('#pCounter');

    let pastry      = "";
    let price       = 0;
    let counter     = 1;

    let modalBtn        = $('.orderProduct');
    let addToCartBtn    = $('#addToCart');

    let myCartBtn       = $('#myCart');
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');

    let clearCartBtn       = $('#clearCart');
    let totalCheckout      = 0;
    let checkoutBtn        = $('#checkout');

    let cartTable          = $('#cartTable');

    //toastr notifications
    toastr.options.timeOut = 2000;     

    minusBtn
        .on('click', function(ev){

            ev.preventDefault();

            counter = prodCounter.html();
            counter > 1 ? counter-- : 1;
            prodCounter.html(counter);

            updateOrderDetails();
    });

    plusBtn
        .on('click', function(ev){

            ev.preventDefault();

            counter = prodCounter.html();
            counter++;
            prodCounter.html(counter);

            updateOrderDetails();
    });

    modalBtn
        .off()
        .on('click', function(ev){

            ev.preventDefault();

            pastry = $(this).data('pastry');
            price = $(this).data('price');
            counter = 1;

            prodCounter.html(counter);

            //modal setting for each pastry...
            $('#pastry').text(pastry);

            //order details
            $('#pDetails').text(pastry);
            updateOrderDetails();

            $('#exampleModal').modal({
                keyboard: false
            });
    });

    myCartBtn
        .off()
        .on('click', function(ev){

            if(cart.length > 0){
                ev.preventDefault();

                //structure the cart table...
                drawCartTableBody();

                $('#cartModal').modal({
                    keyboard: false
                });
            }
            else  {
                alert('Your cart is empty!');
            }
    });

    cartTable
        .off()
        .on('click', '[data-fnx="del"]', function(ev){

            let delProduct = confirm("Delete product from cart?");
            if(delProduct){
                ev.preventDefault();
                let delId = $(this).data('id');
                removeCartItem(delId);
            }
    });

    addToCartBtn
        .on('click', function(ev){
            
            ev.preventDefault();

            let u = Date.now().toString(16)+Math.random().toString(16)+'0'.repeat(16);
            let guid = [u.substr(0,8), u.substr(8,4), '4000-8' + u.substr(13,3), u.substr(16,12)].join('-');

            let cartItem = {
                uuid: guid,
                pastry: pastry,
                price: price,
                amount: counter,
                total: counter * price
            };

            addToCart(cartItem);
    });

    checkoutBtn
        .on('click', function(ev){

            ev.preventDefault();

            if($('#name').val().length > 0 && $('#phone').val().length > 0){

                let confirmCheckout = confirm('Your order will now be submitted');
                
                if(confirmCheckout){
                    let or = Date.now().toString(16)+Math.random().toString(16)+'0'.repeat(16);
                    let orderguid = [or.substr(0,8), or.substr(8,4), '4000-8' + or.substr(13,3), or.substr(16,12)].join('-');

                    ///create format for the order...
                    let order = { 
                        id: orderguid,
                        name: $('#name').val(),
                        phone: $('#phone').val(),
                    }

                    cart.forEach(p => p.orderId = orderguid);
                    order.cart = cart;

                    clearCart();
                    toastr.success('Your order has been successfully submitted!');

                    $('#name').val('');
                    $('#phone').val('');
                }              
                
            }
            else {
                alert('Fill in all fields to submit order!');
            }
            
    })

    function updateOrderDetails(){
        $('#pPrice').text(price);
        $('#amtDetails').text(counter);
        $('#total').text(`$ ${counter * price}US`);
    }



    //////////////////// Cart Section //////////////////////

    updateCartCounter(); //set cart initial counter

    clearCartBtn
        .on('click', function(ev){

            ev.preventDefault();

            if(cart.length > 0){
                let clear = confirm("All products on the cart will be removed!");

                if(clear){
                    clearCart();
                    toastr.success('Cart was successfully cleared!');
                }
            }
            else {
                alert('Cart is already empty!');
            }
    });

    function addToCart(cartItem){
        cart = [...cart, cartItem];
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCounter();

        toastr.success('Product was added to your Cart!');
    }

    function removeCartItem(productId){
        cart = cart.filter(v => v.uuid !== productId);
        localStorage.setItem('cart', JSON.stringify(cart));
        $('#'+productId).fadeOut('slow');

        if(cart.length <= 0){
            $('#cartModal').modal('hide');
        }

        updateCartCounter();
        drawCartTableBody();      
        
        toastr.success('Cart item was successfully deleted!');
    }

    function clearCart(){
        cart = [];
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCounter();

        ////clear table body && update checkout total price && close modal...

        $('#cartModal').modal('hide');

        $('#cartTableBody').empty();
        totalCheckout = 0;   
    }

    function drawCartTableBody() {

        $('#cartTableBody').empty();
        totalCheckout = 0;

        $.each(cart, function(i,v){

            totalCheckout += v.total;

            $('#cartTableBody')
                .append(
                    `<tr><th scope="row">${v.pastry}</th>
                        <td>$ ${v.price}</td>
                        <td>${v.amount}</td>
                        <td>$ ${v.total}</td>
                        <td><a id="${v.uuid}" data-fnx="del" data-id="${v.uuid}" href="" style="color: yellow;"><strong>Delete</strong></a>
                    </td></tr>`
                );
        }); 

        $('#totalCost').html(`$ ${totalCheckout} US`);
    }

    function updateCartCounter() {
        $('#cartAmt').html(cart.length);
    }

})