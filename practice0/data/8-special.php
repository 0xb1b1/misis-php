<?php

for ($p = 1; $p <= 100; $p++) {
    echo '<p>';
    for ($i = 10; $i <= 23; $i++) {
        if ($i == 16) {
            continue;
        }
        for ($j = 1; $j <= ($i >= 12 && $i <= 15 ? 2 : 1); $j++) {
            echo $i . ' ';
        }
    }
    echo '</p>';
}
?>
