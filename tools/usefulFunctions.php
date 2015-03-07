<?php

    /**
     * Allows to check if an element belongs to given array
     * @param * $element
     * @param Array $array
     * @param Boolean $isAssociativeArray
     * @return *
     */

    function isInArray($element, $array, $isAssociativeArray = false){

        if ($isAssociativeArray){
            if (isset($array[$element])){
                return $array[$element];
            } else {
                return false;
            }
        } else {
            for ($i=0, $len=count($array); $i<$len; $i++){
                if ($array[$i] === $element){
                    return $element;
                }
            }
            return false;
        }

    }