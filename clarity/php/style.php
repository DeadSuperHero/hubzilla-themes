<?php

if(! App::$install) {

	// Get the UID of the channel owner
	$uid = get_theme_uid();

	if($uid) {
		load_pconfig($uid,'clarity');
	}

	// Load the owners pconfig
	$nav_bg = get_pconfig($uid, 'clarity', 'nav_bg');
	$nav_icon_colour = get_pconfig($uid, 'clarity', 'nav_icon_colour');
	$nav_active_icon_colour = get_pconfig($uid, 'clarity', 'nav_active_icon_colour');
	$banner_colour = get_pconfig($uid,'clarity','banner_colour');
	$narrow_navbar = get_pconfig($uid,'clarity','narrow_navbar');
	$link_colour = get_pconfig($uid, 'clarity', 'link_colour');
	$schema = get_pconfig($uid,'clarity','schema');
	$bgcolour = get_pconfig($uid, 'clarity', 'background_colour');
	$background_image = get_pconfig($uid, 'clarity', 'background_image');
	$item_colour = get_pconfig($uid, 'clarity', 'item_colour');
	$comment_item_colour = get_pconfig($uid, 'clarity', 'comment_item_colour');
	$font_size = get_pconfig($uid, 'clarity', 'font_size');
	$font_colour = get_pconfig($uid, 'clarity', 'font_colour');
	$radius = get_pconfig($uid, 'clarity', 'radius');
	$shadow = get_pconfig($uid,'clarity','photo_shadow');
	$converse_width=get_pconfig($uid,'clarity','converse_width');
	$align_left=get_pconfig($uid,'clarity','align_left');
	$top_photo=get_pconfig($uid,'clarity','top_photo');
	$reply_photo=get_pconfig($uid,'clarity','reply_photo');
}

// Now load the scheme.  If a value is changed above, we'll keep the settings
// If not, we'll keep those defined by the schema
// Setting $schema to '' wasn't working for some reason, so we'll check it's
// not --- like the mobile theme does instead.

// Allow layouts to over-ride the schema

if($_REQUEST['schema']) {
	$schema = $_REQUEST['schema'];
}

if (($schema) && ($schema != '---')) {

	// Check it exists, because this setting gets distributed to clones
	if(file_exists('view/theme/clarity/schema/' . $schema . '.php')) {
		$schemefile = 'view/theme/clarity/schema/' . $schema . '.php';
		require_once ($schemefile);
	}

	if(file_exists('view/theme/clarity/schema/' . $schema . '.css')) {
		$schemecss = file_get_contents('view/theme/clarity/schema/' . $schema . '.css');
	}

}

// Allow admins to set a default schema for the hub.
// default.php and default.css MUST be symlinks to existing schema files in view/theme/clarity/schema
if ((!$schema) || ($schema == '---')) {

	if(file_exists('view/theme/clarity/schema/default.php')) {
		$schemefile = 'view/theme/clarity/schema/default.php';
		require_once ($schemefile);
	}

	if(file_exists('view/theme/clarity/schema/default.css')) {
		$schemecss = file_get_contents('view/theme/clarity/schema/default.css');
	}

}

//Set some defaults - we have to do this after pulling owner settings, and we have to check for each setting
//individually.  If we don't, we'll have problems if a user has set one, but not all options.
if (! $nav_bg)
	$nav_bg = '#222';
if (! $nav_icon_colour)
	$nav_icon_colour = 'rgba(255, 255, 255, 0.5)';
if (! $nav_active_icon_colour)
	$nav_active_icon_colour = 'rgba(255, 255, 255, 0.75)';
if (! $link_colour)
	$link_colour = '#0275d8';
if (! $banner_colour)
	$banner_colour = '#fff';
if (! $bgcolour)
	$bgcolour = 'rgb(254,254,254)';
if (! $background_image)
	$background_image ='';
if (! $item_colour)
	$item_colour = 'rgb(238,238,238)';
if (! $comment_item_colour)
	$comment_item_colour = 'rgb(255,255,255)';
if (! $item_opacity)
	$item_opacity = '1';
if (! $font_size)
	$font_size = '0.875rem';
if (! $font_colour)
	$font_colour = '#4d4d4d';
if (! $radius)
	$radius = '0.25rem';
if (! $shadow)
	$shadow = '0';
if (! $converse_width)
	$converse_width = '790';
if(! $top_photo)
	$top_photo = '2.3rem';
if(! $reply_photo)
	$reply_photo = '2.3rem';

// Apply the settings
if(file_exists('view/theme/clarity/css/style.css')) {

	$x = file_get_contents('view/theme/clarity/css/style.css');

	if($narrow_navbar && file_exists('view/theme/clarity/css/narrow_navbar.css')) {
		$x .= file_get_contents('view/theme/clarity/css/narrow_navbar.css');
	}

	if($align_left && file_exists('view/theme/clarity/css/align_left.css')) {
		$x .= file_get_contents('view/theme/clarity/css/align_left.css');
	}

	if($schemecss) {
		$x .= $schemecss;
	}

	$aside_width = 288;

	// left aside and right aside are 285px + converse width
	if($align_left) {
		$main_width = (($aside_width) + intval($converse_width));
	}
	else {
		$main_width = (($aside_width * 2) + intval($converse_width));
	}
	// prevent main_width smaller than 768px
	$main_width = (($main_width < 768) ? 768 : $main_width);

	$options = array (
		'$nav_bg' => $nav_bg,
		'$nav_icon_colour' => $nav_icon_colour,
		'$nav_active_icon_colour' => $nav_active_icon_colour,
		'$link_colour' => $link_colour,
		'$banner_colour' => $banner_colour,
		'$bgcolour' => $bgcolour,
		'$background_image' => $background_image,
		'$item_colour' => $item_colour,
		'$comment_item_colour' => $comment_item_colour,
		'$font_size' => $font_size,
		'$font_colour' => $font_colour,
		'$radius' => $radius,
		'$shadow' => $shadow,
		'$converse_width' => $converse_width,
		'$nav_float_min_opacity' => $nav_float_min_opacity,
		'$nav_percent_min_opacity' => $nav_percent_min_opacity,
		'$top_photo' => $top_photo,
		'$reply_photo' => $reply_photo,
		'$pmenu_top' => $pmenu_top,
		'$pmenu_reply' => $pmenu_reply,
		'$main_width' => $main_width,
		'$aside_width' => $aside_width
	);

	echo str_replace(array_keys($options), array_values($options), $x);

}

// Set the schema to the default schema in derived themes. See the documentation for creating derived themes how to override this.

if(local_channel() && App::$channel && App::$channel['channel_theme'] != 'clarity')
	set_pconfig(local_channel(), 'clarity', 'schema', '---');
