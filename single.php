<?php get_header(); ?>
<?php
/*start the loop */
while(have_posts()):
    the_post();
    the_title();
get_template_part('template/content/content-single');
the_post_thumbnail(array(100,100)); 
the_excerpt();    
the_author();
the_author_meta('description') ;
the_author_meta('avator');
the_category();
the_tags();
endwhile;
?>
<?php get_footer(); ?>