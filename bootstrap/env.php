<?php

$host = $_SERVER['HTTP_HOST'];

$env_dir = __DIR__ . '/../env/';

if (file_exists($env_dir . get_domain($host) . '.env'));
{
    $dotenv = new \Dotenv\Dotenv($env_dir, get_domain($host) . '.env');
    $dotenv->load();
}

function get_domain($url)
{
    $domain = $url;
    if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
        return $regs['domain'];
    }
    return false;
}
