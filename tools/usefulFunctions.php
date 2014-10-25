<?php

function isInArray($element, $array){
    if(in_array($element, $array)){
        return $array[$element];
    } else {
        return false;
    }
}