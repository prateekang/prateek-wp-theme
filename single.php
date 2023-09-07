<?php get_header(); ?>
<?php
/*start the loop */
while(have_posts()):
    the_post();
    the_title();
get_template_part('template/content/content-single');
the_post_thumbnail(array(100,100));    
endwhile;
?>
<?php get_footer(); ?>