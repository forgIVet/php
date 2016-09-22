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