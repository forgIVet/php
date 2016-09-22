
<?php
		$arr = array("生日快乐","今天是你的生日","同学们为你许愿");/*049打印随机组合生日祝福语*/
		$array = array("祝你万事如意","祝你生日快乐","祝你福如东海长流水寿比南山不老松");
		$rand = rand(0,2);
		echo $arr[$rand].$array[$rand];
?>