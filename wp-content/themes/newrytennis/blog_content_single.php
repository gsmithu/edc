<div class="blog-post">
    <h1 class="blog-post-title single-blog-post-title"><?php the_title(); ?></h1>
    <?php echo styled_category_list(); ?>
    <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author_posts_link(); ?></a></p>

    <?php the_content(); ?>
</div>
<!-- /.blog-post -->
