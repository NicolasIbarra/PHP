<?php
// Get our config file
require_once( dirname( __FILE__ ) . '/config.php' );

// Output the page title
function the_title() {
  global $title;

  echo $title;
}

// Output home URL
function home_url() {
  echo ABS_URL;
}

function the_subtitle() {
  global $subtitle;

  echo $subtitle;
}

function the_image_url() {
  global $image_url;

  echo ABS_URL . 'assets/images/' . $image_url;
}

function the_author() {
  global $author;

  echo $author;
}

function the_author_link() {
  global $author_link;

  echo $author_link;
}

function the_date() {
  global $date;

  echo $date;
}

function is_home() {
  if ( is_page() ) {
    return true;
  }

  return false;
}

function is_page( $page = array( 'index' ) ) {
  if ( in_array( get_current_page_filename(), $page ) ) {
    return true;
  }

  return false;
}

function get_current_page_filename() {
  return substr( basename( $_SERVER['PHP_SELF'] ), 0, -4 );
}

// Setup global variables
$is_home = is_home();
$is_page = is_page( array( 'index', 'about' ) );
$is_post = is_page( array( 'post' ) );
