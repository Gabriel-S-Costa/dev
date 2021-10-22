<?php 

/**
 * CSS 
 */

$minCSS = new MatthiasMullie\Minify\CSS();
$minCSS->add(dirname(__DIR__)."/views/assets/css/style.css");
$minCSS->add(dirname(__DIR__)."/views/assets/css/form.css");
$minCSS->add(dirname(__DIR__)."/views/assets/css/button.css");
$minCSS->add(dirname(__DIR__)."/views/assets/css/message.css");
$minCSS->add(dirname(__DIR__)."/views/assets/css/load.css");
$minCSS->minify(dirname(__DIR__)."/views/assets/style.min.css");



/**
 * JS
 */