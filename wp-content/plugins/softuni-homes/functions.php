<?php

/**
 * Homes Enqueue
 */

function softuni_enqueue_scripts() {
	wp_enqueue_script( 'softuni-script', plugins_url( 'assets/scripts/scripts.js', __FILE__ ), array( 'jquery' ), 1.1 );
	wp_localize_script( 'softuni-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'softuni_enqueue_scripts' );

/**
 * Add meta data for the home - visits_count
 *
 * @param integer $post_id
 * @return void
 */
function softuni_update_home_visit_count( $post_id = 0 ) {
    if( empty( $post_id ) ) {
        return;
    }

    $visits_count = get_post_meta( $post_id, 'visits_count', true );

    if( !empty( $visits_count ) ) {
        $visits_count = $visits_count + 1;
        update_post_meta( $post_id, 'visits_count', $visits_count );
    }
    else {
        update_post_meta( $post_id, 'visits_count', 1 );
    }

    $visits_count = get_post_meta( $post_id, 'visits_count', true );
}

/**
 * Add meta data for the home - likes
 *
 * @return void
 */
function softuni_home_like() {
	$home_id = esc_attr( $_POST['home_id'] );
	$like_number = get_post_meta( $home_id, 'likes', true );
    
    if( empty( $like_number ) ) {
        update_post_meta( $home_id, 'likes', 1 );
    }
    else {
        $like_number = $like_number + 1;
        update_post_meta( $home_id, 'likes', $like_number );
    }

    wp_die();
}
add_action( 'wp_ajax_nopriv_softuni_home_like', 'softuni_home_like' );
add_action( 'wp_ajax_softuni_home_like', 'softuni_home_like' );

/**
 * Display single post term
 *
 * @param [type] $post_id
 * @param [type] $taxonomy
 * @return void
 */
function softuni_display_single_term( $post_id, $taxonomy ) {
    $terms = get_the_terms( $post_id, $taxonomy );
    $output = '';
    $loopCount = 0;

    if( empty( $post_id ) || empty( $taxonomy ) ) {
        return;
    }

    if( !empty( $terms ) && is_array( $terms)  ) {
        foreach ( $terms as $term ) {
            $loopCount = $loopCount + 1;
            if( $loopCount > 1 ) {
                $output .= $term->name . ', ';
            }
            else {
                $output .= $term->name;
            }
        }
    }

    return $output;
}

/**
 * Display other homes
 *
 * @param [type] $home_id
 * @return void
 */
function softuni_display_other_homes( $home_id ) {
    if( empty( $home_id ) ) {
        return;
    }

    $home_args = array(
        'post_type'      => 'home',
        'post_status'    => 'publish',
        'orderby'        => 'name',
        'posts_per_page' => 2
    );

    $homes_query = new WP_Query( $home_args );

    if( !empty( $homes_query ) ) {
        ?>
            <h2 class="section-heading">Other similar properties:</h2>
            <ul class="properties-listing">
                <?php foreach( $homes_query->posts as $home ) { ?>
                    <li class="property-card">
                        <div class="property-primary">
                            <h2 class="property-title"><a href="#"><?php echo $home->post_title; ?></a></h2>
                            <div class="property-meta">
                                <span class="meta-location"><?php echo softuni_display_single_term( $home->ID, 'location' ); ?></span>
                                <span class="meta-total-area">Total area: <?php echo softuni_display_single_term( $home->ID, 'totalArea' ) . ' sq.m'; ?></span>
                            </div>
                            <div class="property-details">
                                <span class="property-price">€ <?php echo softuni_display_single_term( $home->ID, 'price' ); ?></span>
                                <span class="property-date">Posted <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ' . __( 'ago' ); ?></span>
                            </div>
                        </div>
                        <div class="property-image">
                            <div class="property-image-box">
                                <?php if( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'home-thumbnail' ); ?>
                                <?php else : ?>
                                    <img src="https://i.imgur.com/ZbILm3F.png" alt="property image">
                                <?php endif ?>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php
    }
}

/**
 * Add filter that manipulates the title
 *
 * @param [type] $title
 * @return void
 */
function change_title_text( $title ) {
    return $title . ' 1st function.';
}
add_filter( 'the_title', 'change_title_text', 10 );

/**
 * Add filter that manipulates the content
 *
 * @param [type] $content
 * @return void
 */
function display_twitter_share( $content ) {
    $post_title = get_the_title( get_the_ID() );
    $twitter = '<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=' . $post_title . '">Tweet</a>';
    $content .= '<div>' . $twitter . '</div>';
    
    return $content;
}
add_filter( 'the_content', 'display_twitter_share' );