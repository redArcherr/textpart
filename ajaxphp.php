<?php
/**
 * Created by PhpStorm.
 * User: redArcherr
 * Date: 2018/7/4
 * Time: 18:05
 */
header('Access-Control-Allow-Origin: *');
header("Content-type: text/html; charset=utf-8");

if (isset($_POST['text'])){
    $speak=$_POST['text'];
}else{
    $speak="o(*￣▽￣*)ブ";
}
echo json_encode($speak);


