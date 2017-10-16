<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head();?>
</head>

<body>

    <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="header">
        <p class="header-main-title"><?php echo get_option( 'display_title' );?></p>
        <p class="header-subtitle"><?php echo get_option( 'display_subtitle' );?></p>
        <p class="header-established">Est. <?php echo get_option( 'est_year' );?></p>
    </a>

    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
        </div>
    </div>

    <div class="container">
