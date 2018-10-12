<?php
define('DB_NAME','register');
define('DB_USERNAME','username');
define('DB_PASSWORD','password');
define('DB_HOST','localhost');


$link = mysql_connect ( DB_NAME,DB_USERNAME,DB_PASSWORD,DB_HOST);
if(!$link)
{
	die('cont connect'.mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('con use'.DB_NAME.':'.mysql_error());
}
$value2=$_POST['username'];
$value3=$_POST['password'];
$sql="SELECT `id`, `username`, `password` FROM `demo` WHERE 1";

if(!mysql_query($sql))
{
	die('error:'.mysql_error());
}
mysql_close();

?>