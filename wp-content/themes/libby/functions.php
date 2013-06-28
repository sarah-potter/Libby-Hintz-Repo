<?php
 
 add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );
 
function woo_custom_cart_button_text() {
 
        return __( '&hearts;', 'woocommerce' );
 
}



function search_with_button_submit() {
?>
<div id="searchform">
	<form method="get" class="search_form_visible" action="<?php bloginfo('home'); ?>/">
	<p><input class="text_input" type="text" value="Enter Text &amp; Click to Search" name="s" id="s" onfocus="if (this.value == 'Enter Text &amp; Click to Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter Text &amp; Click to Search';}" />
	<input type="submit" class="my-search" id="searchsubmit" value="SEARCH" /></p>
	</form>
	</div>
<?php
}
add_action('search_form', 'search_form');