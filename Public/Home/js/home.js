// JavaScript Document

/*$(document).ready(function(){
	$("input[type='button']").click(function(){
		alert("点击我了!");
		})
	})*/
	

	function show(){		
		alert("被点击了!");
		}
			

	/*$(document).ready(function(){
       $("#but").click(function(){
       alert("被点击了!");
      });
    });*/
	
	
	function goto(){
		 //var url="{:U('index/index')}";
		 var a = 1;
		 var b = 2;
		
		 url += "?aa="+a;
		 url += "&bb="+b;
		 window.location.href = url;
		}

	