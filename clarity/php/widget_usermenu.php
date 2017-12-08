<?php

function widget_usermenu($args) {
  $tpl = get_markup_template('user_menu.tpl'), array(
    '$banner' => t('User Menu')
  ));
  }
