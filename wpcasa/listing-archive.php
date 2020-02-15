<div id="listing-<?php the_ID(); ?>" <?php wpsight_listing_class( 'entry-content listing-archive' ); ?> itemscope itemtype="http://schema.org/Product">

	<meta itemprop="name" content="<?php echo esc_attr( $post->post_title ); ?>" />

	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="clearfix listing-archive-content">

		<?php do_action( 'wpsight_listing_archive_before', $post ); ?>

		<div class="wpsight-listing-wrap-img">
			<?php wpsight_get_template( 'listing-archive-image.php' ); ?>
		</div>

        <?php wpsight_get_template( 'listing-archive-title.php' ); ?>

        <?php wpsight_get_template( 'listing-archive-description.php' ); ?>

        <?php wpsight_get_template( 'listing-archive-summary.php' ); ?>

        <?php wpsight_get_template( 'listing-archive-info.php' ); ?>

        <?php wpsight_get_template( 'listing-archive-compare.php' ); ?>

		<?php do_action( 'wpsight_listing_archive_after', $post ); ?>

	</div>

</div><!-- #listing-<?php the_ID(); ?> -->
