<div style="width:99%; margin:auto;">
<h4 class="w-100 h4 text-center mt-2 p-4"><?=$ts[$do];?></h4>
    
    <form method="post" action="api/edit.php">
        <table width="100%" class="table table-bordered text-center">
            <tbody>
                <tr style="background: lightgrey;">
                    <td width="45%">履歷照片</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
            <?php

                $rows=$Image->all();
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td width="45%">
                        <img src="img/<?=$value['img'];?>" style="width:120px;height:150px;">
                    </td>
                    <td width="23%">
                        <input type="text" name='text[]' value="<?=$value['text'];?>">
                    </td>
                    <td width="7%">
                        <input type="radio" name="sh" value="<?=$value['id'];?>" <?=($value['sh']==1)?"checked":"";?>>
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
                    </td>
                    <td>
                        <input type="button"  value="更換圖片" 
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/image_update.php?id=<?=$value['id'];?>&#39;)">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$value['id'];?>">
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$do;?>.php&#39;)" 
                              value="<?=$as[$do];?>">
                    </td>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                        <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>
