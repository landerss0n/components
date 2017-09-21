<?php
/**
Plugin Name: Components
Plugin URI: https://github.com/digitalunited/components
Author: Digital United / Digiwise AB
Author URI: http://digitalunited.io
*/

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

add_action('after_setup_theme', 'initComponents');
function initComponents()
{
    $autoloader = new \DigitalUnited\Components\Autoloader();
    $autoloader->requireFiles();
    $autoloader->registerComponents();
}
