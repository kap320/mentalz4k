<?php

spl_autoload_register(function ($className) {
    $file = __DIR__ . '/../../src/' . str_replace('\\', '/', $className) . '.php';

    if (file_exists($file)) {
        require $file;
    } else {
        die('Terjadi Error! Hubungi Rendy! <a href="https://tiktok.com/@mentalz4k">click disini</a>');
    }
});
