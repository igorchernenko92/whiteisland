<div class="wpsight-listing-section wpsight-listing-section-summary">

	<?php do_action( 'wpsight_listing_archive_summary_before' ); ?>

	<?php wpsight_listing_summary(get_the_ID(), array('details_3', 'details_4')); ?>

    <?php wpsight_listing_price(); ?>

	<?php do_action( 'wpsight_listing_archive_summary_after' ); ?>

</div><!-- .wpsight-listing-section-summary -->