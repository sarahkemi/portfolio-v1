<?php get_header();
?>
<br />
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	 <b class="storytitle"><?php the_title(); ?></b>
<div class="meta"><i> Written at <?php the_time() ?> on <?php the_date('l, F j, Y', '', ''); ?>.
 <?php the_meta(); ?> </i><br /></div>


	<div class="storycontent">
		<?php the_content(__('continued...')); ?>
	</div>

	<div class="feedback">
	<br />
		<?php wp_link_pages(); ?>
		<?php comments_popup_link(__('0 Notes'), __('1 Note'), __('% Notes')); ?>
	</div>

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts here, buddy!'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('foward'), __('back')); ?>

<?php get_footer(); ?>