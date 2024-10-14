jQuery(document).ready(function ($) {
    $(".call-btn").on("click", function (e) {
        e.preventDefault(); // Prevent the default action
        var product_id = $(this).data("product_id"); // Get the product ID

        // Data to be sent to the server
        var data = {
            action: "woocommerce_add_to_cart", // Action name for PHP
            product_id: product_id, // Product ID
            quantity: 1, // Quantity to add
        };

        // Make the AJAX POST request
        $.post(ajax_object.ajax_url, data, function (response) {
            if (response) {
                // Trigger the WooCommerce event for added to cart
                $(document.body).trigger("added_to_cart", [
                    response.fragments,
                    response.cart_hash,
                ]);
                
                // Update the cart widget content
                $(".widget_shopping_cart_content").html(
                    response.fragments["div.widget_shopping_cart_content"]
                );

                // Open the side cart automatically
                $("#fkcart-floating-toggler").click(); // Assuming this toggles the cart
            } else {
                console.error("Failed to add product to the cart.");
            }
        });
    });
});
