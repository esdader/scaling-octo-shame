<?php get_header(); ?>

<div class="l-container clearfix">
	
	<?php 
		$args = array(
			'post_type'      => 'projects',
			'post_status'    => 'publish',
			'orderby'        => 'menu_order',
			'order'			 => 'ASC',
			'posts_per_page' => -1,
		);
		
		$qry = new WP_Query( $args );

		$module_count = 0;
		
	?>

	<?php if ( $qry->have_posts() ) : while ( $qry->have_posts() ) : $qry->the_post(); ?>
		<?php if ( have_rows('module') ) : while ( have_rows('module') ) : the_row(); ?>
				<?php 
					if ( get_sub_field('statement_module_color') ) {
						$module_color = ' style=" background-color: ' . get_sub_field('statement_module_color') . '"';
					} else {
						$module_color = '';
					}
				?>
				<?php 
					if ( get_sub_field('module_type') ) {
						$module_type = get_sub_field('module_type');
						
						if ( $module_type == 'objects') {
							$objects_module = true;
							$module_count++;
						} else {
							$objects_module = false;
						}
					}
				?>
				<?php if ( $objects_module ) : ?>
					<article class="l-panel clearfix">
						<div class="l-col one">
							<div class="l-module statement-module"<?php echo $module_color; ?>>
								<a href="<?php the_permalink(); ?>">
									<h1><?php the_title(); ?></h1>
									<p><?php echo $module_type; ?></p>
								</a>
							</div>
							<div class="l-module secondary-image-module">
								<?php if ( have_rows('secondary_image_module') ) : ?>
									<div class="owl-carousel carousel-show-dots">
										<?php while ( have_rows('secondary_image_module') ) : the_row(); ?>
											<?php 
												$img = get_sub_field('secondary_image');
												$img =  $img['sizes']['secondary-image'];
											?>
											<div><img  class="lazyOwl" data-src="<?php echo $img; ?>" alt="" /></div>
										<?php endwhile; ?>
									</div>
									<button class="carousel-btn carousel-prev"><span class="visuallyhidden">Previous Image</span></button>
									<button class="carousel-btn carousel-next"><span class="visuallyhidden">Next Image</span></button>
								<?php endif; ?>
							</div>
						</div>
						<div class="l-col two">
							<div class="l-module primary-image-module">
								<?php if ( have_rows('primary_image_module') ) : ?>
									<div class="owl-carousel carousel-show-dots">
										<?php while ( have_rows('primary_image_module') ) : the_row(); ?>
											<?php 
												$img = get_sub_field('primary_image');
												$img =  $img['sizes']['primary-image'];
											?>
											<div><img  class="lazyOwl" data-src="<?php echo $img; ?>" alt="" /></div>
										<?php endwhile; ?>
									</div>
									<button class="carousel-btn carousel-prev"><span class="visuallyhidden">Previous Image</span></button>
									<button class="carousel-btn carousel-next"><span class="visuallyhidden">Next Image</span></button>
								<?php endif; ?>
							</div>
							<div class="l-module graphic-module">
								
							</div>
							<div class="l-module tertiary-image-module">
								<?php if ( have_rows('tertiary_image_module') ) : ?>
									<div class="owl-carousel carousel-show-dots">
										<?php while ( have_rows('tertiary_image_module') ) : the_row(); ?>
											<?php 
												$img = get_sub_field('tertiary_image');
												$img =  $img['sizes']['tertiary-image'];
											?>
											<div><img  class="lazyOwl" data-src="<?php echo $img; ?>" alt="" /></div>
										<?php endwhile; ?>
									</div>
									<button class="carousel-btn carousel-prev"><span class="visuallyhidden">Previous Image</span></button>
									<button class="carousel-btn carousel-next"><span class="visuallyhidden">Next Image</span></button>
								<?php endif; ?>
							</div>
						</div>
					</article>
				<?php endif; ?>
		<?php endwhile; ?>	
		<?php endif; ?>


	
	<?php endwhile; ?>
		<?php if ( $module_count == 0 ) : ?>
			<article class="l-module statement-module projects-view">
				<h1>Sorry no projects were found</h1>
			</article>
		<?php endif; ?>
	<?php else: ?>
		<article class="l-module statement-module projects-view">
			<h1>Sorry no projects were found</h1>
		</article>
	<?php endif; ?>
</div>

<?php get_footer(); ?>