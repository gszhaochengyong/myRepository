<?php 
$arr=array("我是从ajax方式jsonp方式获得的数据1","我是从ajax方式jsonp方式获得的数据2","我是从ajax方式jsonp方式获得的数据3");

$callback=$_GET["cb"];

echo $callback."(".json_encode($arr).")";

?>