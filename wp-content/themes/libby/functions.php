<?php
 
 add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );
 
function woo_custom_cart_button_text() {
 
        return __( '&hearts;', 'woocommerce' );
 
}

