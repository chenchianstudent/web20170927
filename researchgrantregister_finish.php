<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:43
 */
?>
<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];
$other1 = $_POST['other1'];
$time = $_POST['time'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($_SESSION['name'] != null)
{
    //新增資料進資料庫語法
    $sql = "insert into researchgrant (type, pwnumber, name, place, researchname,time) values ('$pw','$telephone', '$address','$other','$other1','$time')";
    if(mysqli_query($link,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control3.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control3.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';
}
?>