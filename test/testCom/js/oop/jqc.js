	var jqFactory=function jqFactoryFunction(){
		// this.dom=this.isString(id)?this.id(id):id;
		this.version="1.1";

		// return this.dom;

	} 

	jqFactory.prototype={
		ver:function(){
			console.log(this.version);
		},
		isString:function(obj){
			return toString.call(obj)==="[object String]";
		},
/*		id:function(id){
			return dom=this.isString(id)?document.getElementById(id):id;
		},*/
		html:function(id,htmlString){
			var dom=this.isString(id)?this.id(id):id;
			if(htmlString){
				dom.innerHTML=htmlString;
			}else{
				return dom.innerHTML;
			}
		},
		val:function(id,value){
			var dom=this.isString(id)?this.id(id):id;
			dom.setAttribute("value",value);
		},
		//传入json对象，键值是一级菜单，二级菜单用数组，如果是空就是没有子菜单
		menu:function(menuData){
			// var domBox=this.isString(id)?this.id(id):id;
			var str="<ul id='menuId'>";
			for(var i in menuData){
				console.log(i);
				str+="<li>"+i+"";
				if(menuData[i].length>0){
					str+="<ol id='chiMenuId'>";
					for (var j = 0; j < menuData[i].length; j++) {
						str+="<li>"+menuData[i][j]+"</li>"
					}
					str+="</ul></li>";
				}else{
					str+="</li>";
				}
			}
			return str;
		}

	
















	}


	var jq=new jqFactory();
	//jq.ver();
