<?php

//WATCH VIDEO https://www.youtube.com/watch?v=6020HI3GRwY

// Spaceship. NEW in PHP 7
// An integer less than, equal to, or greater than zero when $a is respectively
// less than, equal to, or greater than $b. Available as of PHP 7.
// Trinary. Runs 3 comparisons. Can return three values.
// Comparisons: < = >. Return: -1 0 1.

echo 1 <=> 2; // Outputs -1
echo 1 <=> 1; // Outpus 0
echo 1 <=> 0; // Outputs 1

function compare_length( $a, $b ) {
  $a = strlen( $a );
  $b = strlen( $b );

  if ( $a < $b ) {
    return -1;
  } elseif ( $a == $b ) {
    return 0;
  } elseif ( $a > $b ) {
    return 1;
  }
}

function compare_length_new( $a, $b ) {
  return strlen( $a ) <=> strlen( $b );
}

echo "<br>";

$names = array( "Bob", "Jeff", "Ty", "Johnny" );
usort( $names, 'compare_length_new' ); // Sort an array by values using a user-defined comparison function
print_r( $names );
