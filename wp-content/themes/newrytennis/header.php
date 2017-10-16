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
    <div class="blog-masthead">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="header">
            <p class="header-main-title"><?php echo get_option( 'display_title' );?></p>
            <p class="header-subtitle"><?php echo get_option( 'display_subtitle' );?></p>
            <p class="header-established">Est. <?php echo get_option( 'est_year' );?></p>
        </a>
        
        <nav class="navbar blog-nav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span>MENU</span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="mainNavBar">
                <?php wp_list_pages( '&title_li=' ); ?>

<!--
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
-->
            </div>
          </div>
        </nav>
    </div>

    <div class="container">
