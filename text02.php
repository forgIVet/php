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
    echo "<form action=" method='post'>"
    echo "数字口令：<input name='text' type='test'>";
    echo "<input type='submit' name='sub' value='确定'>"
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
