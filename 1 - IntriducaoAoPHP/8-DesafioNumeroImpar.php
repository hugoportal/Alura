<?php

for ($numero=0; $numero<=100; $numero++) {
    $div = $numero % 2;
    if ($div > 0){
        echo "#$numero" . PHP_EOL;
    }
}