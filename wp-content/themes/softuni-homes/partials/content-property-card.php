<li class="property-card">
    <div class="property-primary">
        <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="property-meta">
            <span class="meta-location">Ovcha Kupel, Sofia</span>
            <span class="meta-total-area">Total area: 91.65 sq.m</span>
        </div>
        <div class="property-details">
            <span class="property-price">€ 100,815</span>
            <span class="property-date">Posted <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ' . __( 'ago' ); ?></span>
        </div>
    </div>
    <div class="property-image">
        <div class="property-image-box">
            <?php if( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'home-thumbnail' ); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/bedroom.jpg'; ?>" alt="property image">
            <?php endif ?>
        </div>
    </div>
</li>