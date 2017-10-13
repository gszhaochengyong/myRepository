<?php
header("Content-type: text/json; charset=utf-8");  
$menuList=array(
	"一级菜单1"=>array(
		"二级菜单11"=>array("三级菜单111","三级菜单112","三级菜单113"),
		"二级菜单12"=>array("三级菜单121","三级菜单122","三级菜单123"),
		"二级菜单13"=>array("三级菜单131","三级菜单132","三级菜单133")
	),
	"一级菜单2"=>array(
		"二级菜单21"=>array("三级菜单211","三级菜单212","三级菜单213"),
		"二级菜单22"=>array("三级菜单221","三级菜单222","三级菜单223"),
		"二级菜单23"=>array("三级菜单231","三级菜单232","三级菜单233")
	),
	"一级菜单3"=>array(
		"二级菜单31"=>array("三级菜单311","三级菜单312","三级菜单313"),
		"二级菜单32"=>array("三级菜单321","三级菜单322","三级菜单323"),
		"二级菜单33"=>array("三级菜单331","三级菜单332","三级菜单333")
	),
	"一级菜单4"=>array(
		"二级菜单41"=>array("三级菜单411","三级菜单412","三级菜单413"),
		"二级菜单42"=>array("三级菜单421","三级菜单422","三级菜单423"),
		"二级菜单43"=>array("三级菜单431","三级菜单432","三级菜单433")
	)
);
//非json格式，用dataType返回json格式会报错
/*$articles = array(
	"三级菜单111"=> array(
		"三级菜单111文章1"=>array("三级菜单111文章1详情三级菜单111文章1详情三级菜单111文章1详情三级菜单111文章1详情三级菜单111文章1详情"),
		"三级菜单111文章2"=>array("三级菜单111文章2三级菜单111文章2三级菜单111文章2三级菜单111文章2"),
		"三级菜单111文章2"=>array("三级菜单111文章2三级菜单111文章2三级菜单111文章2三级菜单111文章2"),
		"三级菜单111文章3"=>array("三级菜单111文章3三级菜单111文章3三级菜单111文章3三级菜单111文章3"),
		"三级菜单111文章4"=>array("三级菜单111文章4三级菜单111文章4三级菜单111文章4三级菜单111文章4"),
		"三级菜单111文章5"=>array("三级菜单111文章5三级菜单111文章5三级菜单111文章5三级菜单111文章5"),
		"三级菜单111文章6"=>array("三级菜单111文章6三级菜单111文章6三级菜单111文章6"),
		"三级菜单111文章7"=>array("三级菜单111文章7三级菜单111文章7三级菜单111文章7"),
		"三级菜单111文章8"=>array("三级菜单111文章8三级菜单111文章8三级菜单111文章8三级菜单111文章8"),
		"三级菜单111文章9"=>array("三级菜单111文章9三级菜单111文章9三级菜单111文章9三级菜单111文章9"),
		"三级菜单111文章10"=>array("三级菜单111文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10"),
		"三级菜单111文章11"=>array("三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11")
	), 
	"三级菜单221" => array(
		"三级菜单221文章1"=>array("三级菜单111文章1详情三级菜单111文章1详情三级菜单111文章1详情三级菜单111文章1详情三级菜单111文章1详情"),
		"三级菜单221文章2"=>array("三级菜单111文章2三级菜单111文章2三级菜单111文章2三级菜单111文章2"),
		"三级菜单221文章2"=>array("三级菜单111文章2三级菜单111文章2三级菜单111文章2三级菜单111文章2"),
		"三级菜单221文章3"=>array("三级菜单111文章3三级菜单111文章3三级菜单111文章3三级菜单111文章3"),
		"三级菜单221文章4"=>array("三级菜单111文章4三级菜单111文章4三级菜单111文章4三级菜单111文章4"),
		"三级菜单221文章5"=>array("三级菜单111文章5三级菜单111文章5三级菜单111文章5三级菜单111文章5"),
		"三级菜单221文章6"=>array("三级菜单111文章6三级菜单111文章6三级菜单111文章6"),
		"三级菜单221文章7"=>array("三级菜单111文章7三级菜单111文章7三级菜单111文章7"),
		"三级菜单221文章8"=>array("三级菜单111文章8三级菜单111文章8三级菜单111文章8三级菜单111文章8"),
		"三级菜单221文章9"=>array("三级菜单111文章9三级菜单111文章9三级菜单111文章9三级菜单111文章9"),
		"三级菜单221文章10"=>array("11文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10三级菜单111文章10"),
		"三级菜单221文章11"=>array("三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11三级菜单111文章11")
	)
);*/

// 获得菜单
$menuGet=$_GET['menu'];

if($menuGet=="menu1"){
	// echo $menuList;
	echo json_encode($menuList);
}else{
	echo "出错啦";
}



?>