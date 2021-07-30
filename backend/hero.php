<div style="width:99%; margin:auto;">
<p class="w-100 h5 text-center mt-2"><?=$ts[$do];?></p>
    
    <form method="post" action="api/edit.php">
        <table width="100%" class="table table-bordered table-striped text-center">
            <tbody>
                <tr>
                    <td>背景</td>
                    <td>標題</td>
                    <td>次標題</td>
                    <td>文字</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                    <td></td>
                </tr>
            <?php

                $rows=$Hero->all();
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td>
                        <img src="img/<?=$value['img'];?>" style="width:120px;height:150px;">
                    </td>
                    <td>
                        <input type="text" name='subject[]' value="<?=$value['subject'];?>">
                    </td>
                    <td>
                        <input type="text" name='title[]' value="<?=$value['title'];?>">
                    </td>
                    <td>
                        <textarea name="text[]"  style="width:90%;height:60px"><?=$value['text'];?></textarea>
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=($value['sh']==1)?"checked":"";?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
                    </td>
                    <td>
                        <input type="button"  value="更換圖片" 
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/hero_update.php?id=<?=$value['id'];?>&#39;)">
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
