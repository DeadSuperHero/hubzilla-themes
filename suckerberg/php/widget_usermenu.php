<?php

require_once('include/network.php');
require_once('include/channel.php');

function widget_usermenu($args) {

  if(local_channel()) {
      $channel = channelx_by_n(\App::$poi);
  }

  $o = replace_macros(get_markup_template('user_menu.tpl'), array(
    '$banner' => $channel['channel_name'],
    '$user' => $channel['channel_address'],
    '$avatar' => $channel['xchan_photo_s'],
  ));
  return $o;

  }
