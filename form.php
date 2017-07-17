<meta charset="utf-8">
<table>
    <form action="add.php" method="post">
        <tr>
            <td>商品名称</td>
            <td><input type="text" name="goods_name"></td>
        </tr>
        <tr>
            <td>品牌</td>
            <td><select name="b_id">
                    <?php
                    mysql_connect("127.0.0.1",'root','admin');
                    mysql_select_db("xuhuan");
                    $sql="select * from brand";
                    $res=mysql_query($sql);
                    while($arr=mysql_fetch_assoc($res)){
                        echo "<option value='".$arr['brand_id']."'>".$arr['brand_name']."</option>";
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>价格</td>
            <td><input type="text" name="goods_price">元</td>
        </tr>
        <tr>
            <td>商品状态</td>
            <td><select name="goods_state">
                    <option value="1" >上架</option>
                    <option value="0">下架</option>
                </select>

            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="提交"></td>
        </tr>
    </form>
</table>