<?php
/**
 * @package weston
 */

?>
<div class="entry-content">
		<p><?php the_field('excerpt'); ?></p>
		<iframe style="border: none" src="//html5-player.libsyn.com/embed/episode/id/<?php the_field('podcast_code'); ?>/height/90/theme/custom/thumbnail/yes/direction/backward/render-playlist/no/custom-color/392744/" height="90" width="100%" scrolling="no"  allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
		<a href="<?php the_field('direct_download_link'); ?>" target="_blank">Download Now</a>
		<h4>Transcript</h4>
		<div class="podcast-transcript">
			<?php the_field('transcript_text'); ?>
		</div>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'weston' ),
			'after'  => '</div>',
		) );
	?>
</div><!-- .entry-content -->

