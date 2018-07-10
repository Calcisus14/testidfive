<?php 
/*
template name: resource
*/
get_header();?>

<main class="clear">
    <div class="grid">
    	<?php get_sidebar();?>
		<?php the_post();?>
		<?php the_content();?>
		
	</div>
</main>
<?php get_footer();?>