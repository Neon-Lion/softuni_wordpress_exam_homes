<?php get_header(); ?>
    <h1><?php the_archive_title(); ?></h1>
    <?php if( category_description() ) : ?>
        <div><?php _e( category_description(), 'softuni') ?></div>
    <?php endif ?>
	<ul class="properties-listing">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php get_template_part( 'partials/content', 'property-card' ); ?>
			<?php endwhile ?>
			<?php posts_nav_link(); ?>
		<?php else : ?>		
				<?php _e( 'Not found posts.', 'softuni' ); ?>
		<?php endif ?>
	</ul>
<?php get_footer(); ?>