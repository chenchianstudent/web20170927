

<!doctype html>
<html lang="en">
<head>
    <title>人員名單</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        /*table*/

        .tb_main {
            border-collapse: collapse;
            border: 2px solid #996;
            font: normal 80%/140% verdana, arial, helvetica, sans-serif;
            color: #222222;
            background: #fffff0;
        }
        .tb_main caption {
            padding: 0 .4em .4em;
            text-align: left;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            background: transparent;
        }
        .tb_main td, th {
            border-left: 1px solid #cc9;
            border-bottom: 1px solid #cc9;
            padding: .3em;
        }
        .tb_main thead th, tfoot th {
            border: 1px solid #cc9;
            text-align: left;
            font-size: 1em;
            font-weight: bold;
            color: #444;
            background: #dbd9c0;
        }
        .tb_main td a {
            background: transparent;
            color: #222222;
            text-decoration: none;
            border-bottom: 1px dotted #cc9;
        }
        .tb_main td a:hover {
            background: transparent;
            color: #666;
            border-bottom: 1px dotted #72724c;
        }
        .tb_main th a {
            background: transparent;
            color: #72724c;
            text-decoration: none;
            font-weight:bold;
            border-bottom: 1px dotted #cc9;
        }
        .tb_main th a:hover {
            background: transparent;
            color: #666;
            border-bottom: 1px dotted #72724c;
        }
        .tb_main th, tbody td {
            vertical-align: top;
            text-align: left;
        }
        .tb_main tfoot td {
            border: 1px solid #996;
        }
        .tb_main .odd {
            color: #222222;
            background: #f7f5dc;
        }
        .tb_main tr:hover {
            color: #333;
            background: #fff;
        }
        .tb_main tr:hover th,
        .tb_main tr.odd:hover th {
            color: #333;
            background: #ddd59b;
        }

    </style>
</head>
<body>
<?php
session_start();
include("mysql_connect.inc.php");
if($_SESSION['name'] != null){
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="backcontrol.php">Min-Shiang's Web</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="backcontrol.php">控制台</a></li>
                <li><a href="pweb-1.php">簡歷</a></li>
                <li><a href="control3.php">學術</a></li>
                <li><a href="control4.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
                        Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<h1 style="font-size: 4em" align="center"><b>後臺人員</b></h1>
<?php
include("mysql_connect.inc.php");
mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysqli_select_db("105021007");//我要從member這個資料庫撈資料
$poi=mysqli_select_db("nani");//我要從member這個資料庫撈資料
mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysqli_query($link,"SELECT * FROM nani");//從member中選取全部(*)的資料

?>
<div class="entry" align="center">
    <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main" align="center">
        <tr class="odd">
            <td width="5%" align="center"><b>id</b></td>
            <td align="center"><b>name</b></td>
            <td align="center"><b>pw</b></td>
            <td align="center"><b>email</b></td>
            <td align="center"><b>phone</b></td>
            <td align="center"><b>type</b></td>
        </tr>
        <?php
        for($i=1;$i<=mysqli_num_rows($data);$i++)
        { $rows=mysqli_fetch_row($data);
        ?>
        <tbody><tr class="odd">
            <td width="5%"><?php echo $i?></td>
            <td><?php echo $rows[1]?><br></td>
            <td><?php echo $rows[2]?><br></td>
            <td><?php echo $rows[3]?><br></td>
            <td><?php echo $rows[4]?><br></td>
            <td><?php echo $rows[5]?><br></td>
        </tr>
        <?php }?>




        </tbody></table>




    <footer class="container-fluid text-center">
        <p>Powerd by 絕對不是陳麒安 注意!!!你正在管理員介面</p>
        <script src="http://www.dreamhome.com.tw/escounter/counter.asp?name=28437699&dir=1"></script>
    </footer>
</body>
</html>
<?php
}else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=pweb2.php>';

}
?>

