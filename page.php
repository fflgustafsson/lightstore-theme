<?php get_header(); ?>	
	
	<div class="container">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php the_content(); ?>

		<?php endwhile; else: ?>
			
			<h3>
				Sorry, no posts matched your criteria.
			</h3>

		<?php endif; ?>
		
	</div><!--//container-->

<?php get_footer(); ?> 		