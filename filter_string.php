<?php

    function check_string($str,$len){
        return mb_strlen($str) <= $len && mb_strlen($str) > 1;
    }

    function check_number($num,$min,$max){
        return (($num > $min) && ($num < $max));
    }

?>