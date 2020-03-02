<?php

function kill($val) {
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';
}

function bouncer($age) {
    if($age > 21){
        echo 'You may enter';
    } else {
        echo 'You Shall not Pass!';
    }
}
