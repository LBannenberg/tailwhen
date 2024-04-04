<?php

function tailwhen(array $conditionalClasses): string
{
    $result = [];
    foreach($conditionalClasses as $key => $value) {
        if(is_int($key)) {
            $result[] = $value;
        } elseif ($value) {
            $result[] = $key;
        }
    }
    return implode(' ', array_unique($result));
}

