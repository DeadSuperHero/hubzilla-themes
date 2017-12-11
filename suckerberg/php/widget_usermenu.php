<?php

require_once('include/network.php');
require_once('include/channel.php');
$o = '';

function widget_usermenu($args) {

  $o = replace_macros(get_markup_template('user_menu.tpl')
  );
  return vcard_from_xchan('', \App::get_observer());
  return $o;

  }
