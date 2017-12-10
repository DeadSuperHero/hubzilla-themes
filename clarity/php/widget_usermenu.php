<?php

require_once('include/plugin.php');
require_once('include/channel.php');
require_once('Zotlabs/Lib/Apps.php');

function widget_usermenu($args) {
  $o = replace_macros(get_markup_template('user_menu.tpl'), array(
    '$banner' => t('User Menu'),
    '$app' => $papp,
    '$icon' => $icon,
  ));
  return $o;

  }
