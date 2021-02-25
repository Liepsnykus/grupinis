<?php

function explodeParams($item)
{
    return explode(',', $item);
}

function prepareSecondStmt($statement) {
    if(!empty($statement)) {
        return ' AND ';
    }
}