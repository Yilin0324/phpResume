<?php include_once "../base.php";?>

<h3 class='cent'><?=$as['skills'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">技能類別：</td>
        <td style="text-align:left"><input type="text" name="subject"></td>
    </tr>
    <tr>
        <td>技能項目：</td>
        <td><textarea name="text" style="width:250px;height:120px;"></textarea></td>
    </tr>
</table>
<div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='skills'>
</div>
</form>