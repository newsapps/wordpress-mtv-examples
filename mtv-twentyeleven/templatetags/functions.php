<?php

$twig->addFunction('twentyeleven_get_theme_options', new Twig_Function_Function('twentyeleven_get_theme_options'));
$twig->addFunction('twentyeleven_footer_sidebar_class', new Twig_Function_Function('twentyeleven_footer_sidebar_class'));
$twig->addFunction('twentyeleven_posted_on', new Twig_Function_Function('twentyeleven_posted_on'));


$twig->addFunction('get_header_image', new Twig_Function_Function('get_header_image'));
$twig->addFunction('get_header_textcolor', new Twig_Function_Function('get_header_textcolor'));
$twig->addFunction('wp_title', new Twig_Function_Function('wp_title'));
$twig->addFunction('wp_get_archives', new Twig_Function_Function('wp_get_archives'));
$twig->addFunction('wp_register', new Twig_Function_Function('wp_register'));
$twig->addFunction('wp_loginout', new Twig_Function_Function('wp_loginout'));
$twig->addFunction('wp_meta', new Twig_Function_Function('wp_meta'));


