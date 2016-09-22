<?php
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="charset=utf-8"/>
</head>
<body background="../image/1.jpg" style="font-size:12px; color:#000099; font-family:'微软雅黑'">
<?php
	echo "<form action='' method='post'>";
	echo "数字口令：<input name='text' type='text'>";
	echo "<input type='submit' name='sub' value='确定'>";   
	echo "</form>";
	define("PI",3.1415926);
    function Encrypt($str){
		return $str = $str << PI;
	}
	function Decrypt($str){
		return $str = $str >> PI;
	}
	if(isset($_POST['sub'])){
		echo "加密口令&nbsp;&nbsp;".Encrypt($_POST[text])."<br>";
		$_SESSION[pwd] = Encrypt($_POST[text]);
?>
		<a href='52.php?pwd=1'>解密口令</a>
<?php
	}
	if(isset($_GET['pwd'])){
		echo "解密口令&nbsp;&nbsp;".Decrypt($_SESSION[pwd]);
	}
?>
</body>
</html>