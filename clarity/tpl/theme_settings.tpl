{{include file="field_checkbox.tpl" field=$align_left}}
{{include file="field_checkbox.tpl" field=$narrow_navbar}}
{{include file="field_input.tpl" field=$converse_width}}
{{include file="field_input.tpl" field=$font_size}}
{{if $expert}}
	{{include file="field_colorinput.tpl" field=$nav_bg}}
	{{include file="field_colorinput.tpl" field=$nav_icon_colour}}
	{{include file="field_colorinput.tpl" field=$nav_active_icon_colour}}
	{{include file="field_colorinput.tpl" field=$banner_colour}}
	{{include file="field_colorinput.tpl" field=$bgcolour}}
	{{include file="field_colorinput.tpl" field=$background_image}}
	{{include file="field_colorinput.tpl" field=$item_colour}}
	{{include file="field_colorinput.tpl" field=$comment_item_colour}}
	{{*include file="field_colorinput.tpl" field=$comment_border_colour*}}
	{{*include file="field_input.tpl" field=$comment_indent*}}
	{{include file="field_colorinput.tpl" field=$font_colour}}
	{{include file="field_colorinput.tpl" field=$link_colour}}
	{{include file="field_input.tpl" field=$radius}}
	{{include file="field_input.tpl" field=$shadow}}
	{{include file="field_input.tpl" field=$top_photo}}
	{{include file="field_input.tpl" field=$reply_photo}}

<script>
	$(function(){
		$('#id_clarity_nav_bg, #id_clarity_nav_icon_colour, #id_clarity_nav_active_icon_colour, #id_clarity_banner_colour').colorpicker({format: 'rgba'});
		$('#id_clarity_link_colour,#id_clarity_background_colour').colorpicker();
		$('#id_clarity_toolicon_colour,#id_clarity_toolicon_activecolour,#id_clarity_font_colour').colorpicker();
		$('#id_clarity_item_colour,#id_clarity_comment_item_colour,#id_clarity_comment_border_colour').colorpicker({format: 'rgba'});
	});
</script>
{{/if}}
<div class="settings-submit-wrapper" >
	<button type="submit" name="clarity-settings-submit" class="btn btn-primary">{{$submit}}</button>
</div>
