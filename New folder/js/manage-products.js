$(function () {
    // variables
    let editBtn = $('#product_container');
    let delBtn = $('#product_container');
    let addProductBtn = $('#addProductBtn'); // Updated ID

    editBtn
        .on('click', '[data-fnx="edit"]', function (ev) {
            ev.preventDefault();

            let product = $(this).data('product');

            $('#pastry').html(product);
            $('#editProductModal').modal({
                keyboard: false
            });
        });

    delBtn
        .on('click', '[data-fnx="del"]', function (ev) {
            ev.preventDefault();

            let product = $(this).data('product');
            confirm(`Are you sure you want to delete [${product}] from your products?`);
        });

    addProductBtn
        .on('click', function (ev) {
            $('#addProductModal').modal({
                keyboard: false
            });
        });
});
