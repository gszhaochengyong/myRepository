<?php
//print_r($_POST[]);
/*if($_GET['id']==10){
	//echo '101010';
    print_r($_GET);
}else{
    echo ':((:((:((:((:((';
}
*/
sleep(1);

$str=<<<A
<ul>
    <li><a href="#">我是一条新闻的标题</a></li>
    <li><a href="#">我是一条新闻的标题</a></li>
    <li><a href="#">我是一条新闻的标题</a></li>
    <li><a href="#">我是一条新闻的标题</a></li>
    <li><a href="#">我是一条新闻的标题</a></li>
    <li><a href="#">我是一条新闻的标题</a></li>
</ul>
A;
$str1=<<<A
if(1>100){
    alert(':))');
}else{
    alert(':((');
}
A;
$str3=<<<A
<ul>
<li>1111</li>
<li>222</li>
<li>333</li>
</ul>
A;
$arr=array(
    array('title'=>'这是一条文章的标题','url'=>'#'),
    array('title'=>'这是一条文章的标题','url'=>'http://sifangku.com'),
    array('title'=>'这是一条文章的标题','url'=>'#'),
    array('title'=>'这是一条文章的标题','url'=>'#')
);
$str2=json_encode($arr);

$str4=<<<A
 if(1>10){
 	alert('1不能大于10');
 }else{
 	alert('1小于10');
 }
A;

$json=<<<A
{"name":"孙胜利","sex":"true"}
A;
echo $json;
//echo 'hello world';
//echo $str3;

?>



