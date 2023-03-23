<?php

echo '<h1>Exercises for the PHP course/pract0</h1>';

// List all php files in the current directory
$files = glob('*.php');

// Loop through the files and link them to the page
foreach ($files as $file) {
    // Do not list index.php
    if ($file == 'index.php') {
        continue;
    }
    echo '<a href="' . $file . '">' . $file . '</a><br>';
}
?>
