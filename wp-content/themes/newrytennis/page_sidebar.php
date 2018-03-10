<div class="col-sm-3 col-sm-offset-1 sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Playing Hours</h4>
        <ol class="list-unstyled">
            <li><b><i>Mon-Fri</i></b> - <?php echo get_option('playingHoursMonFri'); ?></li>
            <li><b><i>Sat</i></b> - <?php echo get_option('playingHoursSat'); ?></li>
            <li><b><i>Sun</i></b> - <?php echo get_option('playingHoursSun'); ?></li>
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
<!-- /.page-sidebar -->
