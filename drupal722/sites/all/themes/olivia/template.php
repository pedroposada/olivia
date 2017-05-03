<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 
/**
 * remove tabs
 */
function olivia_menu_local_tasks(&$vars) {
	
	if (isset($vars['primary']) && !user_access('administer site configuration')) {
		foreach ($vars['primary'] as $key => $value) {
			if (isset($value['#link']['path']) && $value['#link']['path'] == 'node/%/webform') {
				unset($vars['primary'][$key]);
			}
		}
	}
	
	return theme_menu_local_tasks($vars); 
}