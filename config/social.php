<?php

defined('SYSPATH') or die('No direct access allowed.');

return [

  // facebook page
  'fb_link' => 'https://www.facebook.com/app',
  // twitter page
  'tw_link' => 'https://twitter.com/app',
  // instagram page
  'ins_link' => 'http://instagram.com/app',
  'twitter' => [
	// login 
	// create app https://apps.twitter.com/
	// tab "Settings"
	// set "Allow this application to be used to Sign in with Twitter"
	// set Callback URL http://www.app.cz/account/twittercallback/ 
	// tab "Keys and Access Tokens"
	// click on create access tokens, get Access Token, Access Token Secret        
	// login
	'oauth' => [
	  'consumer_key' => '',
	  'consumer_secret' => '',
	  'oauth_token' => '',
	  'oauth_token_secret' => '',
	],
	// posts
	'posts_twitter' => [
	  'base' => 'https://twitter.com/app',
	  'consumer_key' => '',
	  'consumer_secret' => '',
	  'oauth_token' => '-',
	  'oauth_token_secret' => '',
	  'name_prepend' => 'Twitter: '
	],
  ],
  'facebook' => [
	'appid' => '',
	'secret' => '',
	'pageid' => '',
	'posts' => [
	  'appid' => '',
	  'secret' => '',
	  'pageid' => '',
	  'name_prepend' => 'Facebook: ',
	]
  ],
  'instagram' => [
	'posts_instagram' => [
	  'apiKey' => '',
	  'apiSecret' => '',
	  'apiCallback' => 'http://www.domain.cz/news/instagramauth',
	  'user_id' => '',
	  'name_prepend' => 'Instagram: ',
	]
  ],
  'pinterest' => [
	'posts' => [
	  'username' => '',
	  'board' => '', 
	]
  ]
];
