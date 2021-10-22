<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @link: https://codeigniter4.github.io/CodeIgniter4/
 */
/**
 * 
 */

function load_page($page, $type, $variables = false){

	switch ($type) {
		case 'main':
			$content = array (
				'head'    => 'structure/head',
				'header'  => 'structure/header',
				'content' => $page,
				'footer'  => 'structure/footer',				
			);
			break;

		case 'basic':
			$content = array (
				'head'    => 'structure/head',
				'header'  => 'structure/header',
				'content' => $page,				
				'footer'  => 'structure/footer',
			);
	}
		
	$namePositions = array_keys($content);
	
	foreach ($namePositions as $position) {

		$needs_data[$position] = (isset($variables[$position])) ? true : false ;
		// retorna se uma view precisa da $data (booleano)

		echo load_view(
			$needs_data[$position],
			$content[$position],
			$variables[$position],
			$position);
		// imprime a view

	}	
		
}

function load_view($needs_data, $content, $info, $position){

	if ($needs_data == true) {
		$data[$position] = $info;
		return view($content, $data[$position]);
	}else{
		return view($content);
	}

}