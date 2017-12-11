<?php

require_once('include/network.php');

function widget_usermenu($args) {

  if(! local_channel())
    return '';

  		$o = '';

  $o = replace_macros(get_markup_template('user_menu.tpl'), array(
    '$photo' => $profile.photo
    '$user' => $observer.channel_links.url
  ));
  return $o;

  }
