<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 16:43
 * 快速排序算法版本一
 */
class quick
{
    /**
     * @param $data 处理数组
     */
    function quicksort($data){
        $e = count($data);
        if($e <= 1){
            return $data;
        }
        $left = array();
        $right = array();
        for($i = 0;$i < $e-1;++$i){
            if($data[$i] > $data[$e-1]){
                $right[] = $data[$i]; //把大于末位数的数字放在右边
            }else{
                $left[]  = $data[$i]; //把小于末位数的数字放在左边
            }
        }

        //递归缩小排序范围并合并排序后的数组
        $left = $this->quicksort($left);
        $right = $this->quicksort($right);
        return array_merge($left,[$data[$e-1]],$right);
    }
}

$testArr = [2,8,3,5,4,6,14,80,94,41,1,32,24,55,11];
$quick = new quick();
$testArr = $quick->quicksort($testArr);
print_r($testArr);