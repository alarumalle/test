<?php

for ($row = 1; $row < 6; $row++) {
    echo $row;
    for ($col = 1; $col <= $row; $col++) {
        echo '*&nbsp;';
    }
    echo '<br>';
}
