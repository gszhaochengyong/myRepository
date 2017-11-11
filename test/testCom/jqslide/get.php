<?php
//sleep(3);

$html=<<<A
<ul>
    <li>哈哈！</li>
    <li>哈哈！</li>
    <li>哈哈！</li>
    <li>哈哈！</li>
    <li>哈哈！</li>
</ul>
A;

$script=<<<A
if(1>100){
    alert('大于100');
}else{
    alert('不大于100');
}
A;

$json=<<<A
{"name":"孙胜利","sex":true}
A;


//返回调用回调函数的js代码
echo "$json";
//echo "{$_GET['callback']}({$str});";
?>