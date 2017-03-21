<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 17:45
 */
class quick
{
    function patition(&$data,$begin,$end){
        $x = 0;
        $key = $data[$end];
        if($begin < $end){
            for ($i = $begin;$i < $end-1 ; $i++){
                if($data[$i] > $key){
                    $temp = $data[$i];
                    $data[$i] = $data[$i+1];
                    $data[$i+1] = $temp;
                    ++$x;
                }
            }
        }
        return $x;
    }

    function quicksort(&$data,$begin,$end){
        if($begin > $end){
            $i = patition($data,$begin,$end);
            quicksort($data,$begin,$i-1);
            quicksort($data,$i+1,$end);
        }
    }
}

$testArr = [2,8,3,5,4,6,14,80,94,41,1,32,24,55,11];
$quick = new quick();
$quick->quicksort($testArr,0,count($testArr)-1);
print_r($testArr);
