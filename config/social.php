<?php

defined('SYSPATH') or die('No direct access allowed.');

return array(
    
    // facebook page
    'fb_link' => 'https://www.facebook.com/app',
    // twitter page
    'tw_link' => 'https://twitter.com/app',
    // instagram page
    'ins_link' => 'http://instagram.com/app',
    
    'twitter' => array(
        'oauth' => array(
            'consumer_key' => '',
            'consumer_secret' => '',         
        ),
        'posts_twitter' => array(
            'base' => 'https://twitter.com/app',
            'consumer_key' => '',
            'consumer_secret' => '', 
            'oauth_token' => '-',
            'oauth_token_secret' => '',
            'name_prepend' => 'Twitter: '
        ),
    ),
    'facebook' => array(
        'appid' => '',
        'secret' => '', 
        'pageid' => '',
        
        'posts' => array(
            'appid' => '',
            'secret' => '', 
            'pageid' => '',
            'name_prepend' => 'Facebook: ',
        )
    ),
    'instagram' => array(
        'posts_instagram' => array(
            'apiKey' => '',
            'apiSecret' => '',
            'apiCallback' => 'http://www.domain.cz/news/instagramauth',
            'user_id' => '',
            'name_prepend' => 'Instagram: ',
        )
    )
    
);
