<?php
/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Images',
        'pretty_uri' => false,
        'site_url' => 'https://csu-assignment2.herokuapp.com',
        'nav_menu' => [
            '' => 'Home',
            'random' => 'Random Image'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}