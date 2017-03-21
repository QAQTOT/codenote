<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/23
 * Time: 10:43
 * 快速查找功能
 */
class quicksreach{
    public static $arr = array();
    private $i;

    public function __construct($i){
        $this->i = $i;
    }

    public function _search($data){
        foreach ($data as $key => $value){
            is_array($value) ? $this->_search($value) : self::$arr = array_merge(self::$arr,$data);
        }
    }

    public function __destruct(){
        in_array($this->i,self::$arr) ? print_r("存在") : print_r("不存在") ;
    }

}
$testArr = [[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$i = 9;
$quicksreach = new quicksreach($i);
$quicksreach->_search($testArr);

