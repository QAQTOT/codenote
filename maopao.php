<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 16:19
 * 冒泡排序算法
 */
class maopao
{
    public static function sort(&$arr){
        //双层循环 O(n)<时间复杂度<O(n²)        原理:多次遍历两个数，把小的放在前面，大的放在后面。
        for($i = 0;$i < count($arr) ; ++$i){
            for($j = 0;$j < count($arr)-1-$i;++$j){
                if($arr[$j] > $arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    }
}

$testArr = [2,8,3,5,4,6,14,80,94,41,1,32,24,55,11];
maopao::sort($testArr);
print_r($testArr);
