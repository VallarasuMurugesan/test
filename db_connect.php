<?php
$connect= mysql_connect("localhost","root","") or dir ("database could not connect");
mysql_select_db("studentweb",$connect) or die ("database could not select");
?>

