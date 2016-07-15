
		<?php get_header(); ?>

<!-- _____________________________section-2____________________________ -->



<div class="section-2" id="section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 latest-news">
				<?php $idObj = get_category_by_slug('latest-news'); $id = $idObj->term_id;
				$n=4;   // количество выводимых записей
				$recent = new WP_Query("cat=$id&showposts=$n");?>				
                <h2><?php echo get_cat_name($id);?></h2>
                <div class="alight-right">
                    <a href="<?php echo get_category_link($id);?>" class="all">All news &rarr;</a>
                </div>
				<?php while($recent->have_posts()) : $recent->the_post();?>	
				<div class="col-md-3 col-sm-6 news">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(''); ?>
                </div>
				<?php endwhile; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- _____________________________section-3____________________________ -->

<div class="section-3" id="section-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 latest-news">
            	<?php query_posts(array('post__in' => array(61))); //id поста
            	        while ( have_posts() ) : the_post(); ?>
	                <h2><?php the_title(); ?></h2>
	                <?php the_content(); ?>
            	<?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

<!-- _____________________________section-4____________________________ -->

<div class="section-4" id="section-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 latest-news">
				<?php $idObj = get_category_by_slug('blog'); $id = $idObj->term_id;
				$n=4;   // количество выводимых записей
				$recent = new WP_Query("cat=$id&showposts=$n");?>				
                <h2><?php echo get_cat_name($id);?></h2>
                <div class="alight-right">
                    <a href="<?php echo get_category_link($id);?>" class="all">All posts &rarr;</a>
                </div>
				<?php while($recent->have_posts()) : $recent->the_post();?>	
				<div class="col-md-3 col-sm-6 news">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(''); ?>
                </div>
				<?php endwhile; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- _____________________________section-5____________________________ -->

<div class="section-5" id="section-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 latest-news">
                <?php query_posts(array('post__in' => array(64))); //id поста
            	        while ( have_posts() ) : the_post(); ?>
	                <h2><?php the_title(); ?></h2>
	                <?php the_content(); ?>
            	<?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

<!-- _____________________________section-6____________________________ -->

<div class="section-6" id="section-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 latest-news">
                <h2>Follow us</h2>
                <div class="row">
                	<div class="col-md-8"></div>
                	<div class="col-md-4">
                		<div class="twitter"><?php dynamic_sidebar('Twitter'); ?></div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>