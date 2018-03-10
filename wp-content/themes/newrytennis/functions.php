<?php

//=======================
//=======================
//== Front-end scripts ==
//=======================
//=======================

// Add scripts and stylesheets
function newrytennis_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', 'bootstrap' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'newrytennis_scripts' );


// Add Google Fonts
function newrytennis_google_fonts() {
    wp_register_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway');
    wp_register_style('Lora', 'https://fonts.googleapis.com/css?family=Lora');

    wp_enqueue_style('Raleway');
    wp_enqueue_style('Lora');

}

add_action('wp_print_styles', 'newrytennis_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Add category styles to list items of categories
function styled_category_list( $separator = '', $parents='', $post_id = false ) {
    global $wp_rewrite;
    
    $categories = get_the_category( $post_id );
    
    if ( !is_object_in_taxonomy( get_post_type( $post_id ), 'category' ) )
    return apply_filters( 'the_category', '', $separator, $parents );

    if ( empty( $categories ) )
    return apply_filters( 'the_category', __( 'Uncategorized' ), $separator, $parents );

    $rel = ( is_object( $wp_rewrite ) && $wp_rewrite->using_permalinks() ) ? 'rel="category tag"' : 'rel="category"';

    $thelist .= '<ul class="post-categories">';

    foreach ( $categories as $category ) {
        $thelist .= "\n\t<li";
        switch ( strtolower( $parents ) ) {
            case 'multiple':
                if ( $category->parent )
                $thelist .= get_category_parents( $category->parent, true, $separator );
                $thelist .= ' class="'.$category->category_nicename.'"><a href="' . get_category_link( $category->term_id ) . '"class="post-category" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a></li>';
            break;
            case 'single':
                $thelist .= ' class="'.$category->category_nicename.'"><a href="' . get_category_link( $category->term_id ) . '"class="post-category" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>';
                if ( $category->parent )
                $thelist .= get_category_parents( $category->parent, false, $separator );
                $thelist .= $category->name.'</a></li>';
            break;
            case '':
            default:
                $thelist .= ' class="'.$category->category_nicename.'"><a href="' . get_category_link( $category->term_id ) . '"class="post-category" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a></li>';
        }
    }
    
    $thelist .= '</ul>';
    
    return apply_filters( 'the_category', $thelist, $separator, $parents );
}

//Remove website from comments
function disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','disable_comment_url');





//=========================
//=========================
//== Admin-panel scripts ==
//=========================
//=========================

// === General Settings ===
add_filter('admin_init', 'general_settings_register_fields'); 

function general_settings_register_fields() { 
    //Display Title
    register_setting('general', 'display_title', 'esc_attr'); 
    add_settings_field('display_title', '<label for="display_title">'.__('Display Title' , 'display_title' ).'</label>' , 'general_settings_display_title', 'general'); 
    
    //Display Subtitle
    register_setting('general', 'display_subtitle', 'esc_attr'); 
    add_settings_field('display_subtitle', '<label for="display_subtitle">'.__('Display Subtitle' , 'display_subtitle' ).'</label>' , 'general_settings_display_subtitle', 'general'); 
    
    //Est Year
    register_setting('general', 'est_year', 'esc_attr'); 
    add_settings_field('est_year', '<label for="est_year">'.__('Est. Year' , 'est_year' ).'</label>' , 'general_settings_est_year', 'general'); 
} 

function general_settings_display_title() { 
    $display_title = get_option( 'display_title', '' ); 
    echo '<input id="display_title" type="text" name="display_title" value="' . $display_title . '" />'; 
}

function general_settings_display_subtitle() { 
    $display_subtitle = get_option( 'display_subtitle', '' ); 
    echo '<input id="display_subtitle" type="text" name="display_subtitle" value="' . $display_subtitle . '" />'; 
}

function general_settings_est_year() { 
    $est_year = get_option( 'est_year', '' ); 
    echo '<input id="est_year" type="text" name="est_year" value="' . $est_year . '" />'; 
}


// === Custom Settings ===
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
    <div class="wrap">
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'sidebar-section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>
        </form>
    </div>
    <?php }

//Opening Hours
function setting_playing_hours_mon_fri() { ?>
       <input type="text" name="playingHoursMonFri" id="playingHoursMonFri" value="<?php echo get_option('playingHoursMonFri'); ?>" />
    <?php }

function setting_playing_hours_sat() { ?>
       <input type="text" name="playingHoursSat" id="playingHoursSat" value="<?php echo get_option('playingHoursSat'); ?>" />
    <?php }

function setting_playing_hours_sun() { ?>
       <input type="text" name="playingHoursSun" id="playingHoursSun" value="<?php echo get_option('playingHoursSun'); ?>" />
    <?php }

// Twitter
function setting_twitter() { ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
    <?php }

//Facebook
function setting_facebook() { ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
    <?php }

function custom_settings_page_setup() {
    add_settings_section( 'sidebar-section', 'Sidebar Info', null, 'theme-options' );
    
    //Playing Hours
    add_settings_field( 'playingHoursMonFri', 'Playing Hours - Mon-Fri', 'setting_playing_hours_mon_fri', 'theme-options', 'sidebar-section' );
    add_settings_field( 'playingHoursSat', 'Playing Hours - Sat', 'setting_playing_hours_sat', 'theme-options', 'sidebar-section' );
    add_settings_field( 'playingHoursSun', 'Playing Hours - Sun', 'setting_playing_hours_sun', 'theme-options', 'sidebar-section' );
    
    register_setting( 'sidebar-section', 'playingHoursMonFri' );
    register_setting( 'sidebar-section', 'playingHoursSat' );
    register_setting( 'sidebar-section', 'playingHoursSun' );

    //Social Media    
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'sidebar-section' );
    add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'sidebar-section' );
  
	register_setting( 'sidebar-section', 'twitter' );
    register_setting( 'sidebar-section', 'facebook' );
  }

add_action( 'admin_init', 'custom_settings_page_setup' );