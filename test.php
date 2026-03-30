<?php
echo "PHP is working!";
echo "<br>Request method: " . $_SERVER['REQUEST_METHOD'];
echo "<br>Current directory: " . __DIR__;
echo "<br>Files in directory: " . implode(', ', scandir(__DIR__));
?>
