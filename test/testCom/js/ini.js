	//根据id获得元素
	function $(id){
		return document.getElementById(id);
	}

	//根据类名获得元素，支持同标签多类名
	//遍历所有标签，有classname=函数传递的参数classname一样就留下来存到数组里，最后返回数组。
/*	function getclass(classname){
	   if (document.getElementsByClassName) {//支持getElementsByClassName函数时
	   		return document.getElementsByClassName(classname);
	   	} else {//不支持getElementsByClassName函数时 如ie678
	   		var arr=[];//存放返回数据的数组
	   		var dom =document.getElementsByTagName("*");//获取 所有元素
	   		for(var i = 0, length1 = dom.length; i < length1; i++){
	   			var claarr=dom[i].className.split(' ');//将多个类名分隔成数组
	   			for(var i = 0, length1 = claarr.length; i < length1; i++){
	   				if (claarr[i]==classname) {  //当数组中的类名和传入的类名相同时就取出这个数据加到返回数组中去
	   					arr.push(dom[i]);
	   				} 
	   			}
	   		}
	   		return arr;
	   	}	
	}*/
	function getclass(classname,id){
		if (document.getElementsByClassName) {//支持getElementsByClassName函数时
			if (id) {//有传id参数时
				return document.getElementById(id).getElementsByClassName(classname);
			} else {//未传id参数时
				return document.getElementsByClassName(classname);
			}
		} else {//不支持getElementsByClassName函数时
			var arr=[];
			var tags;
			if (id) {//有传id参数时
				tags=document.getElementById(id).getElementsByTagName("*");
			} else {//未传id参数时
				tags=document.getElementsByTagName("*");
			}
			console.log(tags.length);
			for(var i = 0, length1 = tags.length; i < length1; i++){
				var txtarr=tags[i].className.split(" ");//将符合条件的元素classy变成数组
					for(var j = 0, length2 = txtarr.length; j < length2; j++){
					//将上面数组各元素对比参数classname,如果相等就符合条件，存入数组
						if(txtarr[j]==classname){
							arr.push(tags[i]);
						}
					}

			}
			return arr;
		}
	}
