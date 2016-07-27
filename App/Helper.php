<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/25
 * Time: 17:58
 */

if (! function_exists('D')) {
    function D($arr = [])
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        exit;
    }
}

