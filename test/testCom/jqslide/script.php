<?php
header('Content-Type:application/x-javascript');
//header('Content-Type:text/javascript');
$script=<<<A
if(1>100){
    alert('大于100');
}else{
    alert('不大于100');
}
A;
echo $script;
?>