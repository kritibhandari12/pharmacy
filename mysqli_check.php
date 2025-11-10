<?php
echo 'class_exists(mysqli): ' . (class_exists('mysqli') ? 'yes' : 'no') . "<br>\n";
echo 'extension_loaded(mysqli): ' . (extension_loaded('mysqli') ? 'yes' : 'no') . "<br>\n";
echo 'Loaded php.ini: ' . (php_ini_loaded_file() ?: 'none') . "<br>\n";
echo 'PHP SAPI: ' . PHP_SAPI . "<br>\n";
echo 'PHP version: ' . PHP_VERSION . "<br>\n";
echo '<hr>';
phpinfo();
?>