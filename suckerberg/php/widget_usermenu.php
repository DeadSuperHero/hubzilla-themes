<?php

function widget_usermenu($args) {

    $channel = channelx_by_n(\App::$profile_uid);

    $o = replace_macros(get_markup_template('user_menu.tpl'), array(
      '$banner' => $channel['channel_name'],
      '$channel' => $channel['channel_address'],
      '$avatar' => $channel['xchan_photo_s'],
    ));

  return $o;

  }
