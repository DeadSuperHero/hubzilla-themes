<?php

require_once('include/network.php');

function widget_usermenu($args) {
  $o = replace_macros(get_markup_template('user_menu.tpl'), array(
    '$banner' => t('User Menu'),
    '$photo' => $profile.photo
  ));
  return $o;

  }
