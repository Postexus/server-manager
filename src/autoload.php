<?php

/**
 * @param string $class
 * @return bool
 */
function autoLoad($class)
{
    $path = explode("\\", $class);
    if (array_shift($path) == 'serverManager' && array_shift($path) == 'src') {
        $filePath = __DIR__ . '/' . implode('/', $path) . '.php';
        if (!empty($filePath)) {
            /** @noinspection PhpIncludeInspection */
            require_once($filePath);
        }
    }

    return false;
}

spl_autoload_register('autoLoad');