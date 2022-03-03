<?php
/**
 * The Template for displaying all single posts.
 *
 */



get_header(); ?>
	<main id="primary" class="site-main">
        <?php if (get_field('header_image')): ?>
            <img class="podcast-header" src="<?php the_field('header_image'); ?>">
        <?php else: ?>
            <img class="podcast-header" src="https://www.debsheppard.com/wp-content/uploads/2020/12/podcast-header.jpg">
        <?php endif; ?>
        <div class="inner">
            <div class="title">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                <?php the_date( 'M-d-y','<h5>', '</h5>' ); ?>
            </div>
        </div><!-- .inner -->
		<?php while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single-podcast' );
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php get_footer(); ?>