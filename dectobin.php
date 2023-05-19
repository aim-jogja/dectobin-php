<?php
    $ip = readline('Enter a string: ');

    $ip_arr = explode(".", $ip);
    $result = [];

    foreach($ip_arr as $segment){
        $binary = [];
        $stop = $segment;
        while(floor($stop) != 0){
            array_push($binary, (floor($stop) % 2));

            $stop = ($stop / 2);
        }
        if(sizeof($binary) < 8){
            while(sizeof($binary) < 8){
                array_push($binary, 0);
            }
        }
        $binary = array_reverse($binary);
        array_push($result, implode("", $binary));
    }
    $res = implode(".", $result);
    echo $res;

    // 11000000.10101000.00000001. 00000001