<body background="../image/1.jpg" style="font-size:16px; color:#000099; font-family:'微软雅黑'">
<table align="center" border="1" ><tr><td  align="center"width="364">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/1.jpg" border="0" usemap="#Map">
<map name="Map"><area shape="rect" coords="5,7,97,45" href="53.php?link=我的语言"></map>&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/2.jpg" border="0" usemap="#Map2">
<map name="Map2"><area shape="rect" coords="1,3,97,46" href="53.php?link=语言介绍"></map>
</td></tr><tr><td height="157">
<?php
		require("53inc.php");
		switch($_GET['link']){
				case"我的语言";
				echo $str1;
				break;
				case"语言介绍";
				echo $str2;
				break;
		}
?>
</td></tr></table>
</body>
