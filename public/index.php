<?php
/* require autoload files for PSR-7 */
$root_dir = str_replace('waikeri/public', 'waikeri/', __DIR__);
require_once($root_dir.'vendor/autoload.php');
require_once($root_dir.'app/functions/index.php');

/* dotenv */
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable($root_dir);
$dotenv -> load();

/* blade configuration */
use Philo\Blade\Blade;
$views = $root_dir . 'views';
$cache = $root_dir . 'cache';
$blade = new Blade($views, $cache);

require_once('../router.php');