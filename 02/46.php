
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