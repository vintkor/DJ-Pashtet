<div class="section-1"  id="section-1">
    <div id="video-wrap" class="video-wrap">
        <video preload="metadata" autoplay loop id="my-video">
            <source src="<?php echo get_template_directory_uri(); ?>/video/Nightclub_DJ_Hands_in_Air.mov">
        </video>
    </div>
    <div class="wrapper">
    <div class="parent">
            <div class="child">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <img class="logo" src="<?php $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                        echo $thumb_url[0];
                    ?>" alt="<? echo get_bloginfo('name');?>">
                <p class="logo"><?php the_content(); ?></p>
                <?php endwhile; endif;?>        
            </div>
            <div class="helper"></div>
        </div>
        <div class="wrapper-menu">
            <ul class="top-menu">
                <li><a class="menuItem" href="#section-1">Home</a></li>
                <li><a class="menuItem" href="#section-2">News</a></li>
                <li><a class="menuItem" href="#section-3">Gallery</a></li>
                <li><a class="menuItem" href="#section-4">Blog</a></li>
                <li><a class="menuItem" href="#section-5">Music</a></li>
                <li><a class="menuItem" href="#section-6">Follow us</a></li>
            </ul>
        </div>
        <div class="bounce">            
            <a href="#section-2"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" alt=""></a>
        </div> 
    </div>
</div>