<?php
header("content-type:text/html;charset=utf-8");
//链接数据库
mysql_connect("127.0.0.1",'root','admin');
mysql_select_db("xuhuan");
$sql="select goods_id,goods_name,goods_price,brand_name,goods_state from goods inner join brand on b_id=brand_id";
$res=mysql_query($sql);
?>
<table border="1">
    <th>商品名称</th>
    <th>品牌</th>
    <th>价位</th>
    <th>操作</th>
    <th>状态</th>

    <?php
    while($arr=mysql_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>".$arr['goods_name']."</td>";
        echo "<td>".$arr['brand_name']."</td>";
        echo "<td>";
        if(($arr['goods_price'])<3000){
            echo"低端";
        }elseif(($arr['goods_price'])>=3000&&(($arr['goods_price'])<6000)){
            echo"中端";
        }else{
            echo"高端";
        }
        echo "</td>";
        echo "<td><a href='del.php?id=".$arr['goods_id']."'>删除</a></td>";
        echo "<td>";
        if(($arr['goods_state'])==1){
            echo "<a href='sel.php?id=".$arr['goods_id']."&&state=0'>上架</a>";
        }else{
            echo "<a href='sel.php?id=".$arr['goods_id']."&&state=1'>下架</a>";
        }
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>