<?php
/* require autoload files for PSR-7 */
$root_dir = __DIR__.'/../';
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/functions/index.php';

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