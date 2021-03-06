<?php include "base.php";?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="mediaResume/favicon.ico">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>resume</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
	<style>
		/* .menu-style{
			color:#000; font-size:13px; text-decoration:none;
		} */
        /* a{
            color:"yellow";
        }
        a:hover{
            text-decoration:underline;
        } */
        .list-group li{
            background:#eee;
        }
	</style>
</head>

<body class="container">
    <div class="row mt-4">
        <div class="col-md-2">
        <div id="lift" style="float:left;">
                <div id="menuput" >
                    <!--主選單放此-->
                    <h3 style=" height: 48px; text-align: center; margin-top: 10px;">後台管理</h3>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action ">
                    <a href="./backend.php?do=hero" class="text-dark">主頁管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="./backend.php?do=image" class="text-dark">履歷照片管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=personal" class="text-dark">個人資料管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=job" class="text-dark">求職目標管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=experience" class="text-dark">經歷管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=education" class="text-dark">學歷管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=skills" class="text-dark">技能管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=portfolio" class="text-dark">作品集管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=biography" class="text-dark">自傳管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action ">
                    <a href="?do=admin" class="text-dark">管理者帳號管理</a>
                    </li>
                    
                </ul>
                </div>
                
            </div>
        </div>

        <div class="col-md-10">
        <div >
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px; text-align: center;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><button onclick="location.replace(&#39;index.php&#39;)"
                                    style="width:100%; height:50px;">管理登出</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php
								$do=(isset($_GET['do']))?$_GET['do']:'hero';
								$file="backend/".$do.".php";
								// 先判斷檔案是否存在
								if(file_exists($file)){
									include $file;
								}else{
									include "backend/hero.php";
								}
	

							?>
            </div>
        </div>
    </div>

    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

</body>

</html>