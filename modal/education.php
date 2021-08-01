<?php include_once "../base.php";?>

<h3 class='cent' style="margin: 5px;"><?=$as['education'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td>系所名稱：</td>
        <td><input type="text" name="title"></td>
    </tr>
    <tr>
        <td>時間：</td>
        <td><input type="text" name="dwork"></td>
    </tr>
    <tr>
        <td>學校系所介紹：</td>
        <td><textarea name="text" style="width:250px;height:120px;"></textarea></td>
    </tr>
</table>
<div class="cent" style="text-align: center ;margin-top: 10px;">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="education">
</div>
</form>