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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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
        /* .list-group li{
            background:#eee;
        } */
        .list-group {
            border-radius:0;
        }

        aside{
            height: 100vh;
            background:#343a40;
            text-align: center;
            /* overflow: hidden; */
        }
        body{
            box-sizing: border-box;
            /* overflow: hidden; */
            overflow: auto;
            white-space: inherit;
        }
        main{
            display: block; 
            overflow-x: auto;
            white-space: inherit;
            background: ghostwhite;
        }
        
	</style>
</head>

<body>
<header>
    <!-- <nav class="navbar bg-dark navbar-dark">
      <div class="container-fluid"><a class="link-dark navbar-brand site-title mb-0" href="?do=admin">
      後台管理區</a>
      </div>
    </nav> -->
</header>

<section>
    <div class="row h-100 w-100 m-0">
        <aside class="col-md-2 me-auto mb-2 mb-lg-0 p-0">
        <div>
                <div id="menuput">
                    <!--主選單放此-->
                    <!-- <h3 style=" height: 48px; text-align: center;">後台管理</h3> -->
                <ul class="list-group">
                <li class="list-group-item list-group-item-action bg-dark p-4">
                <a href="?do=admin" class="text-light"><i class="far fa-smile"></i> 後台管理區</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="./backend.php?do=hero" class="text-light">主頁管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="./backend.php?do=image" class="text-light ">履歷照片管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=personal" class="text-light ">個人資料管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=job" class="text-light ">求職目標管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=experience" class="text-light ">經歷管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=education" class="text-light ">學歷管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=skills" class="text-light ">技能管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=portfolio" class="text-light ">作品集管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=biography" class="text-light ">自傳管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark">
                    <a href="?do=admin" class="text-light ">管理者帳號管理</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark text-light"
                     onclick="location.replace(&#39;index.php&#39;)" style="cursor: pointer;">管理登出
                    </li>
                    
                </ul>
                </div>
                
            </div>
        </aside>

        <main class="col-md-10">
        <div >
                <!--正中央-->
                <!-- <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px; text-align: center;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><button onclick="location.replace(&#39;index.php&#39;)"
                                    style="width:100%; height:50px;">管理登出</button></td>
                        </tr>
                    </tbody>
                </table> -->
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
        </main>
    </div>

    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
</section>

</body>

</html>