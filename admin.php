<?php

header("content-type:text/html;charset=utf-8");
$link = mysqli_connect("127.0.0.1", "baobao", "123456", "baobao");
	mysqli_set_charset($link, "utf8");
	$sql = "select * from user ";
	$result =  mysqli_query($link, $sql); // 执行 sql 语句

	 if($result === FALSE){
	 	
		exit("sql语句拼写有误，请检查!");
		
	 }else{
		
		 $arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
		 // 释放结果集 
		 mysqli_free_result($result);
		 
		 // 关闭数据库
		 mysqli_close($link);
		 
		 
		 
		 
	 }
	 
?>

<html>
	<head>
		<title>

			后台管理！
			
		</title>
					
		<style>
			td{
				text-align:center;
			}
			</style>
	</head>
	<body>
		  <table border="1" cellspacing="0"  width="1000" align="center">
		  	<tr>
		
		  		<th>ID</th>
		  		<th>姓名</th>
		  		<th>用户名</th>
		  		<th>密码</th>
		  		<th>注册时间</th>
					<th>操作</th>
		  	</tr>
		  	
		  	<?php 
		  	   foreach($arr as $v){
		  	 ?>
		  	<tr>
					<td><?php echo $v["id"];?></td>
					<td><?php echo $v["nickName"];?></td>
		  		<td><?php echo $v["userName"];?></td>
		  		<td><?php echo $v["pwd"];?></td>	
		  		<td><?php echo $v["regTime"];?></td>
		  		<td><a href="del.php?id=<?php echo $v["id"];?>">删除</a></td>
		  	</tr>
		  	<?php
			   }
		  		?>
		  </table>
	</body>
</html>
	

	
	
	
	