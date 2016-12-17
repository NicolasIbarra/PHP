<?php

//WATCH VIDEO https://www.youtube.com/watch?v=vudn_I_H1Pc

// New in PHP 7
// Added for the "common case of needing to use a ternary in conjunction with isset()"
// Using the null coalescing operator will make it auto check for null unlike ternary
// Most likely used in processing user data and the common case of needing to check
// if something exists and if it doesn't, using a default value.
// Is a NULL coalescing operator not a FALSE coalescing operator

// The old crumby, loser way
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// The new fancy, ninja coder way
// Like running isset() and !is_null(). Although technically isset() does both
$username = $_GET['user'] ?? 'nobody';

// Chaining
$b = 12;
$c = 0;
$f = null;

echo $a ?? $d ?? $b ?? 3;
echo $a ?? $f ?? $c ?? 1;
echo $g ?? $h ?? 7;
