<?php

// WATCH VIDE https://www.youtube.com/watch?v=-qUsI8k0lP4&t=606s

/*
Plugin Name: John Morris WordPress Snippets
Plugin URI: http://johnmorrisonline.com
Description: WordPress code snippets from <a href="http://www.johnmorrisonline.com">John Morris</a>
Version: 0.1.0
Author: John Morris
Author URI: http://johnmorrisonline.com
Text Domain: john-morris-snippets
*/

if ( ! class_exists( 'John_Morris_WordPress_Snippets' ) ) {
  class John_Morris_WordPress_Snippets {
    public function __construct() {
      add_filter( 'user_contactmethods', array( $this, 'contact_methods' ), 10, 1 );
    }

    public function contact_methods( $contact_methods ) {
      $new_methods = array(
        array(
          'service' => 'facebook',
          'label'   => 'Facebook URL',
        ),
        array(
          'service' => 'favorite-pet-name',
          'label'   => 'Name of Favorite Pet',
        ),
        array(
          'service' => 'hop-skotch-bee-bop',
          'label'   => 'Hop Skotch Bee Bop',
        ),
      );

      foreach ( $new_methods as $method ) {
        if ( ! isset( $contact_methods[$method['service']] ) ) {
          $contact_methods[$method['service']] = $method['label'];
        }
      }

      return $contact_methods;
    }
  }
}

$John_Morris_WordPress_Snippets = new John_Morris_WordPress_Snippets;
