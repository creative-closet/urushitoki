<?php
	$menu_name = $args;
	$menu_name_class = "p-menu__list";
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
	$menu       = wp_get_nav_menu_object($locations[$menu_name]);
	$menu_items = wp_get_nav_menu_items($menu->term_id);

	$menu_list = '<ul class="' . $menu_name_class . '">';

		foreach ((array) $menu_items as $key => $menu_item){
			$title      = $menu_item->title;
			$url        = $menu_item->url;
			$attr_title = $menu_item->attr_title;
			$target     = $menu_item->target;
			if($target != ""){
				$add_class = ' blank-link';
				$blank     = 'target="_blank" rel="noopener noreferrer"';
			}
			$menu_list .=
				'<li class="'. $menu_name_class . '__item'. $add_class .'">
					<a class="'. $menu_name_class . '__item__link' . '"href="' . esc_attr($url) . '"'. $blank .' title="'. $attr_title .'">' . esc_html($title) . '</a>
				</li>';
			$add_class = "";
			$blank     = "";
		}
		$menu_list .= '</ul>';
	} else {
	$menu_list = '<ul>
		<li>Menu "' . $menu_name . '" not defined.</li>
	</ul>';
	}
	echo $menu_list;
