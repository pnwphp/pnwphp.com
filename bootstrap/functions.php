<?php
/**
 *
 */

function bodyClass($pageStr = ''){
	$default = 'page';
	$classes = [];

	if ($pageStr){
		$pageClasses = explode(' ', $pageStr);
		$classes = array_merge($pageClasses, $classes);
	} else {
		$classes[] = $default;
	}
	return implode(' ', $classes);
}

