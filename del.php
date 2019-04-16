<?php
header("content-type:text/html;charset=utf-8");
   // id 
   
   //print_r($_GET);
   
     $id = $_GET["id"];
	 
	 // 操作数据库进行删除
	 
$link = mysqli_connect("127.0.0.1", "baobao", "123456", "baobao");
	 
	 mysqli_set_charset($link,"utf8");

	 $sql = "delete from user where id = $id";

	   mysqli_query($link, $sql);

	  $rows =  mysqli_affected_rows($link);
	  
	  mysqli_close($link);
	  
	  
	  if($rows > 0){
	  	
		 header("location:admin.php");
	  }else{
	  	 header("location:admin.php");
	  }
