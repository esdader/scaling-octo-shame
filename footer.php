<footer class="main-footer">
    <p>&copy; 
    	<?php if (get_field('legal_name', 'options')) the_field('legal_name', 'options'); ?> <?php echo date('Y'); ?>, <?php if (get_field('address_1', 'options')) the_field('address_1', 'options'); ?> <?php if (get_field('address_2', 'options')) the_field('address_2', 'options'); ?>, <?php if (get_field('city', 'options')) the_field('city', 'options'); ?> <?php if (get_field('state', 'options')) the_field('state', 'options'); ?> <?php if (get_field('zip', 'options')) the_field('zip', 'options'); ?> <strong><em>T</em></strong> <?php if (get_field('phone', 'options')) the_field('phone', 'options'); ?> <strong><em>E</em></strong> 
			<?php if (get_field('email', 'options')) : ?>
    			<a class="footer-link" href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
    		<?php endif; ?>
    </p>
    <ul class="social-media">
        <li><a href="http://www.linkedin.com/company/parc-office" class="linkedin ir" target="_blank">Follow on LinkedIn</a></li>
        <li><a href="https://twitter.com/willprince" class="twitter ir" target="_blank">Follow on Twitter</a></li>
        <li><a href="http://www.facebook.com/PARC.NYC" class="facebook ir" target="_blank">Follow on Facebook</a></li>
    </ul>
</footer>

    <?php wp_footer(); ?>
    
    <script>
        // var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        // (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        // g.src='//www.google-analytics.com/ga.js';
        // s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>