<html>
<head>
<meta charset="utf-8">
<title>ajax例子</title>
<script type="text/javascript" src="js/jquery-1.3.1.js"></script>
<style type="text/css">

</style>
<script type="text/javascript">
$(function(){
/*    $('#button1').click(function(){
        //创建XHR对象,后面的Ajax操作都是基于这个对象的！
        var xhr=new XMLHttpRequest();

        xhr.addEventListener('readystatechange',function(){
            if (xhr.readyState==4) {
                //请求完成，将服务器返回的数据，输出来！
                console.log(xhr.responseText);
                $('body').append(xhr.responseText);
            }
        });
        
        //启用一个http请求，以备发送
       //xhr.open('get','test1/a.html',true);//请求的是静态文件，则会讲这个文件内的内容直接返回给客户端
        //xhr.open('get','./test1/a.php',true);//异步，与后面的输出同时输出，不影响，在服务器端执行这个PHP文件，然后将输出的内容返回给客户端！
        xhr.open('get','test1/a.php',false);//同步请求！第一个执行完才执行第二个

        //发送刚刚设置好的请求
        xhr.send(null);
        //console.log('333');
        
      setTimeout(function(){
            xhr.abort();//取消请求！
        },3000);
        
        
        
    });*/
     var str='';
     //用for in 来遍历对象数组
       function  encodes(data){
    	
    	for (var i in data) {
    		
    		str+=i+'='+data[i]+'&';
    		//console.log(str);
    	}
    	return str.substring(0, str.length-1);
    }
/*
  var str1=encodes(
     {name:name,
      id:333,
      age:18

     }
     )
    //用for来遍历数组
    function encodes(data){
         for (var i = 0; i <data.length; i++) {
         //for (var i in data) {
         	str+=i+'='+data[i]+'&';
         }
         return str.substring(0,str.length-1);
    }
     var str2=encodes([name='name1',id='id1',age='age1']);
     console.log(str2);*/
    $(function(){
    /*
    $('button').click(function(){
        var xhr=new XMLHttpRequest();
        var data=encodeU({
            id:1,
            a:1,
            b:2,
            c:3,
            name:'孙胜利'
        });
        xhr.open('get','test/a.php?'+data);
        xhr.send(null);
    });

    */
        var str='';
     //用for in 来遍历对象数组
       function  encodes(data){
    	
    	for (var i in data) {
    		
    		str+=encodeURIComponent(i)+'='+encodeURIComponent(data[i])+'&';//GET方法必须要先进行编码 
    		//console.log(str);
    	}
    	return str.substring(0, str.length-1);
    }
    $('#button1').click(function(){
        var xhr=new XMLHttpRequest();
        xhr.addEventListener('readystatechange',function(){
            if(xhr.readyState==4){
                //console.log(xhr.getResponseHeader('X-Powered-By'));
                //console.log(xhr.getAllResponseHeaders());
            }
        });
        var data=encodes({
            id:10,
            a:1,
            b:2,
            c:3,
            name:'孙胜利'
        });
        console.log(data);
       xhr.open('get','test1/b.php?'+data);
        
        //xhr.open('post','test1/b.php');
        /*xhr.setRequestHeader('author','sunshengli');//自定义post头信息，可以不传
        xhr.setRequestHeader('author1','sunshengli1');//自定义post头信息，可以不传
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');//post方法这步一定要*/
        //xhr.send(data); //与post对应
        xhr.send(null);
    });
    
});
});
</script>
</head>
<body>
<div>
 <input type='button' value="开始" id="button1" name="button1"></input>
  <input type='button' value="停止" id="button2" name="button2"></input>
  <div>
  	11111111
  </div>
</div>
</body>
</html>