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
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($_SESSION['name'] != null)
{
    //新增資料進資料庫語法
    $sql = "insert into courseinformation (name, other, web) values ('$pw','$telephone', '$address')";
    if(mysqli_query($link,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control4.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control4.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';
}
?>