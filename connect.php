<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('atms');
//echo 'Connected successfully<br>';
//mysql_close($link);
?>