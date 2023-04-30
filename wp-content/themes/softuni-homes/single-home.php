<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : ?>
			<?php the_post(); ?>
				<div class="property-single">
					<main class="property-main">
						<div class="property-card">
							<div class="property-primary">
								<header class="property-header">
									<h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="property-meta">
										<span class="meta-location"><?php echo softuni_display_single_term( get_the_ID(), 'location' ); ?></span>
										<span class="meta-total-area">Price: <?php echo softuni_display_single_term( get_the_ID(), 'price' ) . ' €/sq.m'; ?></span>
									</div>

									<div class="property-details grid">
										<div class="property-details-card">
											<div class="property-details-card-title">
												<h3>Rooms</h3>
											</div>
											<div class="property-details-card-body">
												<ul>
													<li><?php echo softuni_display_single_term( get_the_ID(), 'bedroom' ); ?> Bedrooms</li>
													<li><?php echo softuni_display_single_term( get_the_ID(), 'bathroom' ); ?> Bathroom</li>
													<li><?php echo softuni_display_single_term( get_the_ID(), 'livingRoom' ); ?> Living room</li>
													<li><?php echo softuni_display_single_term( get_the_ID(), 'kitchen' ); ?> kitchen</li>
												</ul>
											</div>
										</div>
										<div class="property-details-card">
											<div class="property-details-card-title">
												<h3>Additional Details</h3>
											</div>
											<div class="property-details-card-body">
												<ul>
													<li>Floor: <?php echo softuni_display_single_term( get_the_ID(), 'floors' ); ?></li>
													<li>Elevator/Lift</li>
													<li>Brick-built</li>
													<li>Electricity</li>
													<li>Water Supply</li>
													<li>Heating</li>
												</ul>
											</div>
										</div>
									</div>
						
								</header>

								<div class="property-body">
									<p>Real estate agency "New Home" presents you a two-room apartment in a newly built building in Ovcha Kupel. With quick access to the Ring Road, close to public transport stops, shops and restaurants, a kindergarten.</p>
									<p>The apartment has an entrance hall, living room with kitchenette, bedroom, bathroom with toilet, terrace.</p>
									<p>The exposure is east/north.<br>There is an opportunity to purchase a garage in the building.</p>
									<p>The building will be completed with luxury common areas, staircases and a lobby. Commercial areas include a restaurant, gym, a beauty salon, a shop, and a pharmacy.</p>
								</div>
							</div>
						</div>
					</main>
					<aside class="property-secondary">
						<div class="property-image property-image-single">
							<div class="property-image-box property-image-box-single">
								<?php if( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'home-thumbnail' ); ?>
								<?php else : ?>
									<img src="https://i.imgur.com/ZbILm3F.png" alt="property image">
								<?php endif ?>
							</div>
						</div>
						<a href="#" class="button button-wide like-button" id="<?php echo get_the_ID(); ?>">Like the property (<?php echo get_post_meta( get_the_ID(), 'likes', true ); ?>)</a>
					</aside>
				</div>
				<div>Number of visits on this post: <?php echo get_post_meta( get_the_ID(), 'visits_count', true ); ?></div>
				<?php echo softuni_display_other_homes( get_the_ID() ); ?>
				<?php softuni_update_home_visit_count( get_the_ID() ); ?>
		<?php endwhile ?>
	<?php endif ?>
<?php get_footer(); ?>