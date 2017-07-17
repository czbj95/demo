<?php
header("content-type:text/html;charset=utf-8");
$id=$_GET['id'];
$state=$_GET['state'];
//链接数据库
mysql_connect("127.0.0.1",'root','admin');
mysql_select_db("xuhuan");
$sql="update goods set goods_state=$state where goods_id=$id";
if(mysql_query($sql)){
    echo "修改成功   <a href='show.php'>点击查看</a>";
}else{
    echo "修改失败   <a href='show.php'>点击查看</a>";
}
?>