<body background="../image/1.jpg" style="font-size:18px; color:red; font-family:'微软雅黑'">
<form action="" method="post">
<input type="submit" name="sub" value="打印2000~2020年之间的所有闰年">
</form>

<br>
<?php
	if(isset($_POST['sub'])){
		for($a = 2000;$a <= 2020;$a++){
			if($a % 4 == 0){
				echo $a."&nbsp;&nbsp;";
			}
		}
	}
?>
</body>
</html>