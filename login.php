<?php

require_once __DIR__ . '/vendor/autoload.php'; 

$fb = new Facebook\Facebook([
  'app_id' => '',
  'app_secret' => '',
  'default_graph_version' => 'v2.10',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; 
$loginUrl = $helper->getLoginUrl('http://webyazilim.com/fb/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
