<?php
/**
 * @package Libby
 * @since Coraline 1.0
 */

get_header(); ?>

<div id="content-container">
	<div id="content" role="main">

	<hr />
		<?php echo get_new_royalslider(1);?>
	<hr />

	<div id="lower-buttons">
		<ul>
			<li><div id="mosaic-border"></div><a class="shop" href="/shop">SHOP</a></li>
			<li><a class="gallery" href="/gallery">GALLERY</a></li>
			<li><a class="about" href="/about">ABOUT</a></li>
			<li><a class="blog" href="/blog">BLOG</a></li>
		</ul>
	</div>


	</div>
</div>

<?php get_footer(); ?>