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
    <div class="blog-masthead" data-spy="affix" data-offset-top="5">
         <a class="header" href="<?php echo get_bloginfo( 'wpurl' );?>">
            <p class="header-main-title animated-header"><?php echo get_option( 'display_title' );?></p>
            <p class="header-subtitle animated-header"><?php echo get_option( 'display_subtitle' );?></p>
            <p class="header-established animated-header">Est. <?php echo get_option( 'est_year' );?></p>    
        </a>

        <nav class="navbar">
          <div class="container-fluid">    
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavBar" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="burger-text">Menu</span>
                <span class="sr-only">Toggle Menu</span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mainNavBar">
              <ul class="nav navbar-nav">
                    <?php wp_list_pages( '&title_li=' ); ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>        
    </div>

    <div class="container">
