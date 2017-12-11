<?php

require_once('include/network.php');
require_once('include/channel.php');

function widget_usermenu($args) {

  $o = replace_macros(get_markup_template('user_menu.tpl'), array(
    '$banner' => $channel.channel_name
    '$photo' => $channel.photo_url
  ));
  return $o;

  }
