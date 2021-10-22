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


function loadpage($page='', $type='', $data=[]) {

   switch ($type) {
      case 'basic':
         $pageStructure = [         
            "head"    => 'structure/head',               
            "content" => 'content/' . $page,
            "footer"  => 'structure/footer'            
         ];
      break;      
      case 'main':
         $pageStructure = [
            "head"    => 'structure/head',
            "header"  => 'structure/header',
            "content" => 'content/' . $page,
            "footer"  => 'structure/footer'
         ];
      break;
      case 'content':
         $pageStructure = [
            "content" => 'content/' . $page,
         ];
      break;         
   }

   foreach(array_keys($pageStructure) as $postion) {
      $have_data = (!empty($data[$postion])) ? true : false;
      if($have_data) {
         echo view($pageStructure[$postion], $data[$postion]);
      } else {
         echo view($pageStructure[$postion]);
      }
   }
}
