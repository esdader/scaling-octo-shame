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
				<article class="l-module statement-module projects-view"<?php echo $module_color; ?>>
					<a href="<?php the_permalink(); ?>">
						<h1><?php the_title(); ?></h1>
						<p><?php if ( get_sub_field('module_type') ) the_sub_field('module_type'); ?></p>
					</a>
				</article>
		<?php endwhile; ?>	
		<?php endif; ?>


	
	<?php endwhile; ?>

	<?php else: ?>
		<article class="l-module statement-module projects-view red">
			<h1>Sorry no projects were found</h1>
		</article>
	<?php endif; ?>
</div>

<?php get_footer(); ?>