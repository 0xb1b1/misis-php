<?php

$colors = array(
    'red',
    'green',
    'blue',
);

// Loop through the colors and print them applying html colors
foreach ($colors as $color) {
    echo '<p style="color: ' . $color . ';">' . $color . '</p>';
}
