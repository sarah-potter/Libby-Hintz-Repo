<?php
/**
 * @package Libby
 * @since Coraline 1.0
 */

get_header(); ?>


<div id="content-container" class="full-width">
	<div id="content" role="main">

	<hr />
		<?php echo get_new_royalslider(1);?>
		
	<hr />

	<div id="lower-buttons">
		<ul>
			<div id="mosaic-border"></div>
			<div id="shop"><a class="shop" href="/shop">SHOP</a></div>
			<div id="gallery"><a class="gallery" href="/gallery">GALLERY</a></div>
			<div id="about"><a class="about" href="/about">ABOUT</a></div>
			<div id="blog"><a class="blog" href="/blog">BLOG</a></div>
			
		</ul>
	</div>


	</div>
</div>

<?php get_footer(); ?>