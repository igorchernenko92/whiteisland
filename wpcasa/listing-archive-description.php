<div class="wpsight-listing-section wpsight-listing-section-description">

    <?php do_action( 'wpsight_listing_archive_description_before' ); ?>

    <?php if( wpsight_is_listing_not_available() ) : ?>
        <div class="wpsight-alert wpsight-alert-small wpsight-alert-not-available">
            <?php _e( 'This property is currently not available.', 'wpcasa' ); ?>
        </div>
    <?php endif; ?>

    <div class="wpsight-listing-description" itemprop="description">
        <?php $read_more = '<a class="read_more_archive" href="'. get_permalink(get_the_ID()) . '">' .  __( ' [Weiterlesen]', 'wpcasa' ) . '</a>'  ?>
        <?php if( has_excerpt() ) : ?>
            <?php echo wp_trim_words(apply_filters( 'wpsight_listing_description', wpsight_format_content( get_the_excerpt() ) ), 25, $read_more) ?>
        <?php else : ?>
            <?php echo wp_trim_words(apply_filters( 'wpsight_listing_description', wpsight_format_content( get_the_content() ) ), 25, $read_more) ?>
        <?php endif; ?>
    </div>

    <?php do_action( 'wpsight_listing_archive_description_after' ); ?>

</div><!-- .wpsight-listing-section -->