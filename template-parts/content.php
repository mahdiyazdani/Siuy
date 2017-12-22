<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Siuy
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
	<header class="entry-header">
		<?php 
		siuy_post_thumbnail();
		
		if (is_singular()):
			the_title('<h1 class="entry-title" itemprop="headline">', '</h1>');
		else:
			the_title('<h2 class="entry-title" itemprop="headline"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()): ?>
		<div class="entry-meta">
			<?php siuy_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="mainContentOfPage">
		<?php
		if (has_excerpt() && ! is_singular()):
			the_excerpt();
		else:
			the_content(sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'siuy'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));
		endif;

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'siuy'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		$posted_readmore = true; 
		if (! has_excerpt() && ! is_singular()):
			$posted_readmore = false;
		endif;
		siuy_entry_footer($posted_categories = true, $posted_tags = true, $posted_comments = true, $posted_readmore); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
