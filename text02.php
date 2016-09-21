/*在页面中打印PHP的配置信息*/
<?php
echo phpinfo();
?>

/*在页面中打印服务器时间*/
<?php
echo date('Y-m-s H:i:s')
?>

/*在页面中打印中当前PHP文件名*/
<?php
echo __FILE__;
?>

/*区别单引号和双引号*/
<?php
$a = 1;
echo "输出字符串$a"."<br>"
echo '输出字符串$a';
?>

/*动态输出JavaScript*/
<?php
$str=<<<mark
<script language="javascript" type="text/javascript">
            alert("欢迎进入PHP编程世界！！！")；
</script>
mark;
echo $str
?>

/*数字遇到字符串*/
<?php
    $a = 10;
    $b = "我是字符串型数据";
    &e = $a + $b;
    $f = $b + $a;
    echo "自动类型转换：<br>";
    echo '10+我是字符串型数据='.$e."<br>";
    echo "强制类型转换：<br>";
    echo '10+我是字符串型数据='.(string)$e."<br>";
?>

/*变量引用*/
<?php
    $str = "Hello World!!!";
    echo $str
?>

/*041打印系统环境变量信息print_r($_ENV)*/
<?php
    print_r($_ENV);
?>

/*042使用输出可变变量"I Like PHP!"*/
<?php
    $str_name = "str_name_1";
    $str_name_1 = "I Like PHP!";
    echo $$str_name;
?>

/*043使用转义字符输出特殊字符*/
<?php
    echo "\"PHP是一门Web开发最火的编程语言\"";
?>

/*044使用常量指定的PI的值计算圆的面积*/
<?php
    define("PI",3.1415926);
    $r = 10;
    echo "半径为10个单位的圆的面积".PI*($r*$r);
?>

/*045自定义数字的加密/解密算法*/
<?php
    echo "<form action='' method='post'>";
    echo "数字口令：<input name='text' type='test'>";
    echo "<input type='submit' name='sub' value='确定'>";
    echo "</form>";
    define("PI",3.1415926);
    function Encrypt($str){
          return $str = $str + PI;
    }
    function Decrypt($str){
          return $str = $str - PI;
    }
    if($_POST[sub]){
          echo "加密口令&nbsp;&nbsp;".Encrypt($_POST[test])."<br>";
          $_SESSION[pwd] = Encrypt($_POST[text]);
    }
?>
    <a href='index.php?pwd=1'>解密口令</a>
<?php
    if(isset($_GET[ped])){
            echo "解密口令&nbsp;&nbsp;".Decrypt($_SESSION[pwd]);
    }
?>

/*046比较两个时间戳的大小*/
<?php
    date_default_timezone_set("Asia/ShangHai");
    $a = strtotime("now");
    $b = strtotime("05 May 2014");
    echo $a."\n";
    echo "输出时间".date("Y-m-d H:i:s",$a)."<br><br>";
    echo $b."\n";
    echo "输出时间".date("Y-m-d H:i:s",$b)."<br><br>";
    $c = ceil(($a-$b)/(3600*24));
    echo "据2014年5月5日已经过去".$c."天";
?>

/*047使用条件运算符判断数字的奇偶性*/
<?php
    for($a = 0;$a < 10;$a++){
            echo $a % 2==0?  $a."是偶数"."\n":$a."是奇数"."\n";
    }
?>

/*048判断用户是否具有后台管理权限*/
<?php
    echo "<form action='' method='post'>";
    echo "I&nbsp;&nbsp;&nbsp;D:<input type='text' name='text'><br>";
    echo "Password:<input type='password' name='pwd'>";
    echo "<input type='submit' name='sub' value='确定'>";
    echo "</form>";
    if($_POST[sub]){
            if($_POST[text] == "mr" && $_POST[pwd] == "mrsoft"){
                 echo "<script>alert('您具有管理员权限');</script>";
            }else{
                 echo "<script>alert('您非权限用户');</script>";
            }
    }
?>

/*049打印随机组合生日祝福语*/
<?php
     $arr = array("生日快乐","今天是你的生日","同学们为你许愿");
     $array = array("祝你万事如意","祝你生日快乐","祝你福如东海长流水寿比南山不老松");
     $rand = rand(0,2);
     echo $arr[$rand].$array[$rand];
?>

/*050打印2000~2020年间的所有闰年*/
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
