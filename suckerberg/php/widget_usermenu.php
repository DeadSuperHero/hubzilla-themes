<?php

require_once('include/network.php');
require_once('include/channel.php');

if(local_channel()) {
    $channel = channelx_by_n(\App::$profile_uid);
}

function widget_usermenu($args) {
  $o = replace_macros(get_markup_template('user_menu.tpl'), array(
    '$banner' => $channel.channel_name
  ));
  return $o;

  }
