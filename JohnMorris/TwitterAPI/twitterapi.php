<?php

//WATCH THIS VIDEO https://www.youtube.com/watch?v=1ItudXGjLpM

// Keys and tokens
$consumer_key = 'YOUR APP CONSUMER KEY';
$consumer_secret = 'YOUR APP CONSUMER SECRET';
$access_token = 'YOUR APP ACCESS TOKEN';
$access_token_secret = 'YOUR APP ACCESS TOKEN SECRET';

// Include library
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// Connect to API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

// Create tweet
$new_status = $connection->post("statuses/update", ["status" => "This tweet sent via the Twitter API. Tutorial coming soon at http://youtube.com/johnmorrisvideo."]);

// Get tweets
$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

print_r($statuses);