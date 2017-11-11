<?php
/*$parm=$_GET["param"];

if($parm==1){
	echo "<div>".$parm."</div>";
}else if ($parm==2) {
	echo "<div>".$parm."</div>";
}else{
	echo "<div>".$parm."</div>";
}*/

$username=$_POST['username'];
$pwd=$_POST['password'];
//连接数据库
//添加到数据中
$flag=1;
if ($flag==1) {
	echo "添加成功,用户名是：".$username.'密码是：'.$pwd;
}else{
	echo "添加失败";
}

?>

<script type="text/javascript">
	console.log(parent.document.getElementById("#showInfo").innerHTML);
	//下面为什么要用parent
	//console.log(parent);
	parent.document.getElementById("#showInfo").innerHTML="php里还能写js,以前最早的异步是通过这种方式来返回数据不刷新";
</script>