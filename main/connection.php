<?php
$link = mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"test1") or die(mysql_error($link));
 ?>
