<?php
//ei jõudnud kirjutada, vead sees
for ($row = 1; $row < 6; $row++) {
    echo $row;
    for ($col = 1; $col < (6 - $row); $col++) {
        echo '&nbsp;&nbsp;&nbsp;';
    }
    for ($col = 1; $col <= ($row * 2 - 1); $col++) {
        echo '*&nbsp;';
    }
        echo '<br>';
}
