<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson1; host=localhost","root","");

if(!empty($_POST['handlname']) && empty($_POST['title']) && empty($_POST['comments'])){
$pdo ->exec("insert into diworks_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
}

header("Location:http://localhost/diworks_keijiban/index.php");
?>