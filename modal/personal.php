<?php include_once "../base.php";?>

<h3 class='cent' style="margin: 5px;"><?=$as['personal'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right"><?=$hs['personal'];?>：</td>
        <td style="text-align:right"><input type="text" name="text"></td>
    </tr>
</table>
<div class="cent" style="text-align: center ;margin-top: 10px;">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='personal'>
</div>
</form>