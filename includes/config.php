<?php
/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'page name..',
        'pretty_uri' => false,
        'site_url' => 'https://csu-php-demo.herokuapp.com',
        'nav_menu' => [
            'home' => 'Home'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}