<?php
  //sleep(5);
  //echo 'alert("2222222")';
  if(!isset($_GET['callback'])){
  	exit;
  }
$str =<<<A
[{"name":"zhangsan","url":"http://sifangku.com"},{"name":"zhangsan2","url":"http://sifangku2.com"}]

A;
echo "{$_GET['callback']}({$str});";
?>


