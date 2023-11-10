<?php get_header(); ?>

<?php
while(have_posts()):
    the_post();
    the_title();
get_template_part('template/content/content-single');
the_post_thumbnail(); 
the_excerpt();    
the_author();
the_author_meta('description') ;
the_author_meta('avator');
the_category();
the_tags();
the_post_navigation();
previous_post_link();
next_post_link();
endwhile;
?>
<?php get_footer(); ?>
