<?php 
$arr=array("我是从jsonp方式获得的数据1","我是从jsonp方式获得的数据2","我是从jsonp方式获得的数据3");

$callback=$_GET["_jsonp"];

echo $callback."(".json_encode($arr).")";

 ?>