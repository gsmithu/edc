<div class="col-sm-3 col-sm-offset-1 sidebar">
<!--
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>
            <?php echo get_bloginfo( 'description' ); ?>
        </p>
    </div>
-->
    <div class="sidebar-module-inset">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Follow us</h4>
        <a href="<?php echo get_option('facebook'); ?>">
          <img src="<?php echo get_bloginfo('template_url') ?>/img/fb.png" class="sidebar-social-media-icon">
        </a>
        <a href="<?php echo get_option('twitter'); ?>">
          <img src="<?php echo get_bloginfo('template_url') ?>/img/twitter.jpg" class="sidebar-social-media-icon">
        </a> 
    </div>
</div>
<!-- /.blog-sidebar -->
