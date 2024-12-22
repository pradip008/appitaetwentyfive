<?php get_header(); ?>

<div class="post-class container p-5">
    <?php 
     if(have_posts()){
        while (have_posts()){
            the_post();
            ?>
            <h1 class="page-title"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
            <p class="page-content"><?php the_content(); ?></p>
            <?php
        }
     }
     ?>

</div>

<?php get_footer(); ?>