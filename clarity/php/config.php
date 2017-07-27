redbasic<?php

namespace Zotlabs\Theme;

class ClarityConfig {

	function get_schemas() {
		$files = glob('view/theme/redbasic/schema/*.php');

		$scheme_choices = [];

		if($files) {

			if(in_array('view/theme/clarity/schema/default.php', $files)) {
				$scheme_choices['---'] = t('Default');
				$scheme_choices['focus'] = t('Focus (Hubzilla default)');
			}
			else {
				$scheme_choices['---'] = t('Focus (Hubzilla default)');
			}

			foreach($files as $file) {
				$f = basename($file, ".php");
				if($f != 'default') {
					$scheme_name = $f;
					$scheme_choices[$f] = $scheme_name;
				}
			}
		}

		return $scheme_choices;
	}

	function get() {
		if(! local_channel()) {
			return;
		}

		$arr = array();
		$arr['narrow_navbar'] = get_pconfig(local_channel(),'redbasic', 'narrow_navbar' );
		$arr['nav_bg'] = get_pconfig(local_channel(),'redbasic', 'nav_bg' );
		$arr['nav_icon_colour'] = get_pconfig(local_channel(),'redbasic', 'nav_icon_colour' );
		$arr['nav_active_icon_colour'] = get_pconfig(local_channel(),'redbasic', 'nav_active_icon_colour' );
		$arr['link_colour'] = get_pconfig(local_channel(),'redbasic', 'link_colour' );
		$arr['banner_colour'] = get_pconfig(local_channel(),'redbasic', 'banner_colour' );
		$arr['bgcolour'] = get_pconfig(local_channel(),'redbasic', 'background_colour' );
		$arr['background_image'] = get_pconfig(local_channel(),'redbasic', 'background_image' );
		$arr['item_colour'] = get_pconfig(local_channel(),'redbasic', 'item_colour' );
		$arr['comment_item_colour'] = get_pconfig(local_channel(),'redbasic', 'comment_item_colour' );
		$arr['font_size'] = get_pconfig(local_channel(),'redbasic', 'font_size' );
		$arr['font_colour'] = get_pconfig(local_channel(),'redbasic', 'font_colour' );
		$arr['radius'] = get_pconfig(local_channel(),'redbasic', 'radius' );
		$arr['shadow'] = get_pconfig(local_channel(),'redbasic', 'photo_shadow' );
		$arr['converse_width']=get_pconfig(local_channel(),"redbasic","converse_width");
		$arr['align_left']=get_pconfig(local_channel(),"redbasic","align_left");
		$arr['top_photo']=get_pconfig(local_channel(),"redbasic","top_photo");
		$arr['reply_photo']=get_pconfig(local_channel(),"redbasic","reply_photo");
		return $this->form($arr);
	}

	function post() {
		if(!local_channel()) {
			return;
		}

		if (isset($_POST['redbasic-settings-submit'])) {
			set_pconfig(local_channel(), 'redbasic', 'narrow_navbar', $_POST['redbasic_narrow_navbar']);
			set_pconfig(local_channel(), 'redbasic', 'nav_bg', $_POST['redbasic_nav_bg']);
			set_pconfig(local_channel(), 'redbasic', 'nav_icon_colour', $_POST['redbasic_nav_icon_colour']);
			set_pconfig(local_channel(), 'redbasic', 'nav_active_icon_colour', $_POST['redbasic_nav_active_icon_colour']);
			set_pconfig(local_channel(), 'redbasic', 'link_colour', $_POST['redbasic_link_colour']);
			set_pconfig(local_channel(), 'redbasic', 'background_colour', $_POST['redbasic_background_colour']);
			set_pconfig(local_channel(), 'redbasic', 'banner_colour', $_POST['redbasic_banner_colour']);
			set_pconfig(local_channel(), 'redbasic', 'background_image', $_POST['redbasic_background_image']);
			set_pconfig(local_channel(), 'redbasic', 'item_colour', $_POST['redbasic_item_colour']);
			set_pconfig(local_channel(), 'redbasic', 'comment_item_colour', $_POST['redbasic_comment_item_colour']);
			set_pconfig(local_channel(), 'redbasic', 'font_size', $_POST['redbasic_font_size']);
			set_pconfig(local_channel(), 'redbasic', 'font_colour', $_POST['redbasic_font_colour']);
			set_pconfig(local_channel(), 'redbasic', 'radius', $_POST['redbasic_radius']);
			set_pconfig(local_channel(), 'redbasic', 'photo_shadow', $_POST['redbasic_shadow']);
			set_pconfig(local_channel(), 'redbasic', 'converse_width', $_POST['redbasic_converse_width']);
			set_pconfig(local_channel(), 'redbasic', 'align_left', $_POST['redbasic_align_left']);
			set_pconfig(local_channel(), 'redbasic', 'top_photo', $_POST['redbasic_top_photo']);
			set_pconfig(local_channel(), 'redbasic', 'reply_photo', $_POST['redbasic_reply_photo']);
		}
	}

	function form($arr) {

		if(feature_enabled(local_channel(),'advanced_theming'))
			$expert = 1;


	  	$o .= replace_macros(get_markup_template('theme_settings.tpl'), array(
			'$submit' => t('Submit'),
			'$baseurl' => z_root(),
			'$theme' => \App::$channel['channel_theme'],
			'$expert' => $expert,
			'$title' => t("Theme settings"),
			'$narrow_navbar' => array('redbasic_narrow_navbar',t('Narrow navbar'),$arr['narrow_navbar'], '', array(t('No'),t('Yes'))),
			'$nav_bg' => array('redbasic_nav_bg', t('Navigation bar background color'), $arr['nav_bg']),
			'$nav_icon_colour' => array('redbasic_nav_icon_colour', t('Navigation bar icon color '), $arr['nav_icon_colour']),
			'$nav_active_icon_colour' => array('redbasic_nav_active_icon_colour', t('Navigation bar active icon color '), $arr['nav_active_icon_colour']),
			'$link_colour' => array('redbasic_link_colour', t('Link color'), $arr['link_colour'], '', $link_colours),
			'$banner_colour' => array('redbasic_banner_colour', t('Set font-color for banner'), $arr['banner_colour']),
			'$bgcolour' => array('redbasic_background_colour', t('Set the background color'), $arr['bgcolour']),
			'$background_image' => array('redbasic_background_image', t('Set the background image'), $arr['background_image']),
			'$item_colour' => array('redbasic_item_colour', t('Set the background color of items'), $arr['item_colour']),
			'$comment_item_colour' => array('redbasic_comment_item_colour', t('Set the background color of comments'), $arr['comment_item_colour']),
			'$font_size' => array('redbasic_font_size', t('Set font-size for the entire application'), $arr['font_size'], t('Examples: 1rem, 100%, 16px')),
			'$font_colour' => array('redbasic_font_colour', t('Set font-color for posts and comments'), $arr['font_colour']),
			'$radius' => array('redbasic_radius', t('Set radius of corners'), $arr['radius'], t('Example: 4px')),
			'$shadow' => array('redbasic_shadow', t('Set shadow depth of photos'), $arr['shadow']),
			'$converse_width' => array('redbasic_converse_width',t('Set maximum width of content region in pixel'),$arr['converse_width'], t('Leave empty for default width')),
			'$align_left' => array('redbasic_align_left',t('Left align page content'),$arr['align_left'], '', array(t('No'),t('Yes'))),
			'$top_photo' => array('redbasic_top_photo', t('Set size of conversation author photo'), $arr['top_photo']),
			'$reply_photo' => array('clarity_reply_photo', t('Set size of followup author photos'), $arr['reply_photo']),
			));

		return $o;
	}

}
