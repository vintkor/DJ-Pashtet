<?php get_header(); ?>

<div class="section-index">
	<div class="container">
		<div class="row">
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<div class="thumb_">
				<?php the_post_thumbnail(); ?>
				</div>
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif;?>			
				
		</div>
	</div>
</div>

<?php get_footer();?>