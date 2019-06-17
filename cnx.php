<?php
$id = mysql_connect("localhost","root","") or die(mysql_error());
$id_db = mysql_select_db("login",$id) or die (mysql_error());
?>