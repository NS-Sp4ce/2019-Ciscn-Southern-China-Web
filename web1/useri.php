<?php 
header("content-type:text/html;charset=utf-8");
	if ($_POST['user_name']=='admin123')
		{
			header("Location:useryzm.php");
		}
	else
	{	
		echo '没有这个用户!';
	}
?>