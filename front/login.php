<?php
if(isset($_SESSION['admin'])){
    to("backend.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
    <link rel="shortcut icon" href="../mediaResume/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<section>
    <div class="box">
        
        <div class="container">
            <div class="form">
                <h2>Login Form</h2>
                <form method="post" action="../api/login.php">
                    <!-- <p class="t botli">管理員登入區</p> -->
                    <div class="inputBox">
                        <input name="acc" autofocus="" type="text" placeholder="Username">
                    </div>
                    <div class="inputBox">
                        <input name="pw" type="password" placeholder="Password">
                    </div>
                    <div class="inputBox">
                        <input value="送出" type="submit"><input type="reset" value="清除">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>

