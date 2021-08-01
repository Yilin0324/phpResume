<?php include_once "../base.php";?>

<h3 class='cent' style="margin: 5px;"><?=$as['hero'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right"><?=$hs['hero'];?>：</td>
        <td style="text-align:right"><input type="file" name="img"></td>
    </tr>
    <tr>
        <td>主標題：</td>
        <td><input type="text" name="subject"></td>
    </tr>
    <tr>
        <td>次標題：</td>
        <td><input type="text" name="title"></td>
    </tr>
    <tr>
        <td>文字：</td>
        <td><textarea name="text" style="width:250px;height:150px;"></textarea></td>
    </tr>
</table>
<div class="cent" style="text-align: center ;margin-top: 10px;">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='hero'>
</div>
</form>