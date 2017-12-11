<?php

require_once('include/network.php');

function widget_usermenu($args) {
  $uid = \App::$profile_uid;
  $o = replace_macros(get_markup_template('user_menu.tpl'), array(
    '$banner' => t('User Menu'),
  ));
  return $o;

  }
