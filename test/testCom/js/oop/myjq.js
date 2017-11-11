	//框架主类
	function Factory(ele){
		//jq版本号
		this.version="1.3";
		this.ele=ele;
		
		//初始化
		this.ini();
		
	}


	//框架函数属性
	Factory.prototype={
		ini:function(){
			//传的对象是否为空或者未定义
			if(this.ele==null||this.ele==""||this.ele=="[object Undefined]"){
				this.dom=null;
			}else if (toString.call(this.ele)=="[object Object]") {
				this.dom=this.ele;
			}else if(toString.call(this.ele)=="[object String]"){//对象首字符和除首字符以外字条
				var first=this.ele.substr(0,1);
				var qFirst=this.ele.substr(1);
				//判断id class tag
				if(first==="#"){
					this.dom=document.getElementById(qFirst);
				}else if(first==="."){
					this.dom=document.getElementsByClassName(qFirst);
				}else{
					this.dom=document.getElementsByTagName(ele);
				}
			}
		},
		//版本信息
		ver:function(){
			return this.version;
		},
		//循环对象集合  fn就是对每个元素的处理函数
		each:function(fn){
			// var data={};
			for (var i = 0; i < this.dom.length; i++) {
				fn(i,this.dom[i]);
			}
		},
		//设置和获取元素html内容
		html:function(str){
			//考虑对象可能是集合，这里按集合处理，不过可以在html里调用这个thml方法处理就好了，要写个each方法
			/*		
			if(this.dom.length>0){
				for (var i = 0; i < this.dom.length; i++) {
					this.dom[i].innerHTML=str;
				}
			}*/
			this.dom.innerHTML=str;
			return this;
		},
		//设置标签值
		val:function(value){
			this.dom.setAttribute("value",value);
			return this;
		},
		//传入json对象，键值是一级菜单，二级菜单用数组，如果是空就是没有子菜单
		menu:function(menuData){
			// var domBox=this.isString(id)?this.id(id):id;
			var str="<ul id='menuId'>";
			for(var i in menuData){
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
		},
		eq:function(index){
			for (var i = 0; i < this.dom.length; i++) {
				if(i==index){
					return this.dom[i];
				}
			}
			
		}





	}

	//定义变量等于这个框架类，传元素，就初始化这个类，直接jq(ele)运行。类jQuery
	var jq=function(ele){
		return new Factory(ele);
	}