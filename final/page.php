<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
// START PAGE CONTENT ?>

<div class="page">
	<div class="page-text">
	<?php the_content(); ?>
	</div>
</div>
<?php 
// END PAGE CONTENT
endwhile; endif; ?>
<?php get_footer(); ?>
