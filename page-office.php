<?php get_header(); ?>
<div class="l-container clearfix">
	<article class="l-module contact-module">
		<h1>Contact</h1>
    	<p><?php 
			if (get_field('address_1', 'options')) { 
				the_field('address_1', 'options');
				echo ' '; 
			}
			if (get_field('address_2', 'options')) { 
				the_field('address_2', 'options'); 
				echo '<br>'; 
			}
			if (get_field('city', 'options')) { 
				the_field('city', 'options'); 
				echo ', '; 
			}
			if (get_field('state', 'options')) { 
				the_field('state', 'options'); 
				echo ' ';
			}
			if (get_field('zip', 'options')) {
				the_field('zip', 'options');
			}
		?></p>
		<p><?php 
			if (get_field('phone', 'options')) { 
				the_field('phone', 'options'); 
				echo '<br>'; 
			}
			if (get_field('email', 'options')) : ?>
		    	<a class="footer-link" href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
	    	<?php endif; ?>
	    </p>
	</article>	
</div>
<?php get_footer(); ?>