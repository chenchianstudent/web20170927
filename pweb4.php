<!doctype html>
<html lang="en">
<head>
    <title>王明祥著作</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="pweb2.php">Min-Shiang's Web</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="pweb2.php">首頁</a></li>
                <li><a href="pweb1.php">簡歷</a></li>
                <li><a href="pweb3.php">學術</a></li>
                <li class="active"><a href="pweb4.php">著作</a></li>
                <li><a href="pweb5.php">學生</a></li>
                <li><a href="pweb6.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://120.108.117.245/~105021007/login"><span class="glyphicon glyphicon-log-in"></span>
                        Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="background-color: #adffad;width: 100%;height: 100%" align="center">
    <h2><span style="font-size:1.8em "><b>著作</b></span></h2>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">期刊論文／Journal Papers</a></li>
        <li><a data-toggle="tab" href="#menu1">專利／Patents</a></li>
        <li><a data-toggle="tab" href="#menu2">授課課程／Course Information</a></li>
        <li><a data-toggle="tab" href="#menu3">獲獎／Awards</a></li>
    </ul>

    <div class="tab-content" >
        <div id="home" class="tab-pane fade in active">
            <div id="content">
                <div class="post">

                    <h2 class="title">期刊論文／Journal Papers</h2>
                    <button type="submit"><a href="addPDF.php">下載pdf</a></button>
                    <p></p>
                    <?php
                    include("mysql_connect.inc.php");
                    mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                    mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                    $poi=mysqli_select_db("journalpapers");//我要從member這個資料庫撈資料
                    mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                    $data=mysqli_query($link,"SELECT * FROM journalpapers");//從member中選取全部(*)的資料

                    ?>
                    <div class="entry">
                        <table cellpadding="0" cellspacing="0" class="tb_main">
                            <?php
                            for($i=1;$i<=mysqli_num_rows($data);$i++)
                            { $rows=mysqli_fetch_row($data);
                            ?>
                            <tbody><tr class="odd">
                                <td width="5%"><?php echo $i?></td>
                                <td><?php echo $rows[1]?>,<?php echo $rows[2]?>,<?php echo $rows[3]?><br>
                                    <?php echo $rows[4]?><br>
                                    <?php echo $rows[5]?>,<?php echo $rows[6]?><br>
                                </td>
                            </tr>
                            <?php }?>
                            </tbody></table>
                        <p>&nbsp;</p>
                    </div>
                    <p></p>
                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div id="content">
                <div class="post">

                    <h2 class="title">專利／Patents</h2>
                    <button type="submit"><a href="addPDF.php">下載pdf</a></button>
                    <p></p>
                    <?php
                    include("mysql_connect.inc.php");
                    mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                    mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                    $poi=mysqli_select_db("patents");//我要從member這個資料庫撈資料
                    mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                    $data=mysqli_query($link,"SELECT * FROM patents");//從member中選取全部(*)的資料

                    ?>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <?php
                            for($i=1;$i<=mysqli_num_rows($data);$i++)
                            { $rows=mysqli_fetch_row($data);
                            ?>
                            <tbody><tr class="odd">
                                <td width="5%"><?php echo $i?></td>
                                <td><?php echo $rows[1]?>,<?php echo $rows[2]?>,<?php echo $rows[3]?>,<?php echo $rows[4]?></td>
                            </tr>
                            <?php }?>

                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </div>

                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div id="content">
                <div class="post">


                    <h2 class="title">授課課程／Course Information</h2>
                    <p>點擊課程名稱可取得詳細資訊</p>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <?php
                            include("mysql_connect.inc.php");
                            mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                            mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                            $poi=mysqli_select_db("courseinformation");//我要從member這個資料庫撈資料
                            mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                            $data=mysqli_query($link,"SELECT * FROM courseinformation");//從member中選取全部(*)的資料

                            ?>
                            <div class="entry">
                                <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                                    <?php
                                    for($i=1;$i<=mysqli_num_rows($data);$i++)
                                    { $rows=mysqli_fetch_row($data);
                                    ?>
                                    <tbody><tr class="odd">
                                        <td width="5%"><?php echo $i?></td>
                                        <td><a href="#" onclick="window.open('<?php echo $rows[3]?>')"><?php echo $rows[1]?></a><br><?php echo $rows[2]?></td>
                                    </tr>
                                    <?php }?>

                                    </tbody></table>
                        <p>&nbsp;</p>
                    </div>
                    <p></p>

                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <div id="content">
                <div class="post">

                    <h2 class="title">獲獎／Awards</h2>
                    <button type="submit"><a href="addPDF.php">下載pdf</a></button>
                    <p></p>
                    <?php
                    include("mysql_connect.inc.php");
                    mysqli_connect('localhost','105021007','#yV5X55K0');//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
                    mysqli_select_db("105021007");//我要從member這個資料庫撈資料
                    $poi=mysqli_select_db("awards");//我要從member這個資料庫撈資料
                    mysqli_query($link,"set names utf8");//設定utf8 中文字才不會出現亂碼
                    $data=mysqli_query($link,"SELECT * FROM awards");//從member中選取全部(*)的資料

                    ?>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <?php
                            for($i=1;$i<=mysqli_num_rows($data);$i++)
                            { $rows=mysqli_fetch_row($data);
                            ?>
                            <tbody><tr class="odd">
                                <td width="5%"><?php echo $i?></td>
                                <td><?php echo $rows[1]?>,<?php echo $rows[2]?>,<?php echo $rows[3]?></td>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </div>
                    <p></p>
                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
</div>
    <div id="gotop" style="background-color:  #7cff70"><p align="center" style="font-size: 1.5em">返回至最上層</p></div>
<footer class="container-fluid text-center">
    <p>Powerd by 絕對不是陳麒安 但分數請打給陳麒安</p>
    <script src="http://www.dreamhome.com.tw/escounter/counter.asp?name=28437699&dir=1"></script>
</footer>

    <!-- Start 往頂部箭頭 Jquery碼//-->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#gotop").click(function(){
                jQuery("html,body").animate({
                    scrollTop:0
                },1000);
            });
            $(window).scroll(function() {
                if ( $(this).scrollTop() > 300){
                    $('#gotop').fadeIn("fast");
                } else {
                    $('#gotop').stop().fadeOut("fast");
                }
            });
        });
    </script>
</body>
</html>
