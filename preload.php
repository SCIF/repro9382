<?php

if ('1' === ($_ENV['PRELOAD'] ?? '')) {
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/src/Test.php';

    echo 'Preloaded' . PHP_EOL;
}
