<?php

function tableRow($colNumber)
{
    echo '<tr>';
    for ($col = 1; $col < $colNumber; $col++) {
        echo '<td style: background: red;' >;
        echo 'cell';
        echo '</td>';
    }

    echo '</tr>';
}
