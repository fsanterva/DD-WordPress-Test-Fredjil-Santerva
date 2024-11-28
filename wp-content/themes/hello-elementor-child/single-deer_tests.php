<?php
get_header(); ?>
<div id="main-content">
	<div class="container clean_cont">
	<div id="content-area" class="clearfix">

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
<article class="deer-test">
	<h1><?php the_title(); ?></h1>
	<p><strong>Start Date:</strong> <?php echo get_field('start_date'); ?></p>
	<p><strong>End Date:</strong> <?php echo get_field('end_date'); ?></p>
	<div><strong>Description:</strong> <?php echo get_field('description'); ?></div>
	<div><strong>Cover Image:</strong>
		<img src="<?php echo get_field('cover_image')['url']; ?>" alt="<?php echo get_field('cover_image')['alt']; ?>">
	</div>
	<p><strong>Application Link:</strong> <a href="<?php echo get_field('application_link')['url']; ?>"><?php echo get_field('application_link')['title']; ?></a></p>
</article>
<?php
    endwhile;
	endif; ?>
</div>
</div>
</div>
<?php get_footer();
