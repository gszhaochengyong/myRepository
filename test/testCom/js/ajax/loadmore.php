<?php
$iniData=Array(
	"3dslide1.jpg",
	"3dslide2.jpg",
	"3dslide3.jpg",
	"3dslide4.jpg",
	"3dslide5.jpg",
	"3dslide1.jpg",
	"3dslide2.jpg",
	"3dslide3.jpg",
	"3dslide4.jpg",
	"3dslide5.jpg");
$num=$_GET['num'];
$data=Array();
if ($num<=3) {
	for ($i=0; $i <$num ; $i++) { 
	array_push($data, $iniData[$i]);
	}
}else if($num<count($iniData)){
	for ($i=$num-5; $i <$num ; $i++) { 
		if ($iniData[$i]) {
			array_push($data, $iniData[$i]);
		}
		
	}
}else if($num>count($iniData) && $num<(count($iniData)+5)){
	for ($i=$num-5; $i <count($iniData); $i++) { 
		if ($iniData[$i]) {
			// echo $iniData[$i];
			array_push($data, $iniData[$i]);
		}
	}
}
//sum=13----countInidata10=====inidata+5==15[]
 // 8+5=13>10  其实还要给9 10 加 其他不加
echo json_encode($data);


?>