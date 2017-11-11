<?php 
// 示例1 html形式返回值
/*$p1=$_GET["aaa"];
$p2=$_GET["bbb"];

echo "html形式<div>参数1为".$p1."，参数2为".$p2."</div>";*/

//示例2 json返回值形式
/*$resArr=array("username"=>"张三","password"=>"123");
echo json_encode($resArr);*/

//示例3 post形式
/*$p1=$_POST['aaa'];
$p2=$_POST['bbb'];

echo "html post形式<div>参数1为".$p1."，参数2为".$p2."</div>";*/


//示例4  json post形式
/*$p1=$_POST['aaa'];
$p2=$_POST['bbb'];
if($p1==1&&$p2==2){
	$resArr=array("username"=>"张三","password"=>"123");
}else{
	$resArr=array("username"=>"张三2","password"=>"123");
}

echo json_encode($resArr);*/

 //示例5和6 get xml形式
/* <book>
 	<title>php教程<title>
 	<auther>李炎恢<auther>
 	<price>56<price>
 <book>*/

 // 示例7
 $callback=$_GET['callback'];
 $arr1=array("我是从jsonp方式获得的数据1","我是从jsonp方式获得的数据2","我是从jsonp方式获得的数据3");
 $arr=array("数据1"=>"aaa","数据2"=>"bbb","数据3"=>"ccc");
 echo $callback."(".json_encode($arr1).")";
 ?>