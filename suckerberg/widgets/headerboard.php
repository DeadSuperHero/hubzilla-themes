<?php

function headerboard ($args) {
require_once('include/identity.php');
$o = '';

$channel_id = (int)0;
if(array_key_exists('channel_id', $arr) && intval($arr['channel_id']))
$channel_id = intval($arr['channel_id']);
if(! $channel_id)
$channel_id = get_app()->profile_uid;
if(! $channel_id)
return '';

if(array_key_exists('style', $arr) && isset($arr['style']))
$style = $arr['style'];
else 
$style = 'width:100%; padding-right: 10px; height: auto;'; 

// ensure they can't sneak in an eval(js) function

if(strpos($style,'(') !== false)
return '';

$c = get_cover_photo($channel_id,'html');

if($c) {
$o = '<div class="widget">' . (($style) ? str_replace('alt=',' style="' . $style . '" alt=',$c) : $c) . '</div>';
}
return $o;
}

/* Useful places to go:

The template for the actual sidebar HTML - https://github.com/redmatrix/hubzilla/blob/master/view/tpl/profile_vcard.tpl
Which is then loaded by this - https://github.com/redmatrix/hubzilla/blob/master/include/identity.php
Which is afterwards referenced by this widget - https://github.com/redmatrix/hubzilla/blob/master/include/widgets.php

In the case of HeaderBoard, it would have a tpl file under tpl/headerboard.tpl.
Values would be referenced from /include/identity.php
The template would then be loaded into /widgets/headerboard.php, which should only contain the basic logic of the arguments being provided.

$tpl = get_markup_template('profile_headerboard.tpl');

*/
