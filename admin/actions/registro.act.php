<?php
include "../../common/utils.php";
include "../../common/config.php";
include "../../common/mysql.php";

debug ($_POST);

$display_name = $_POST['display_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

if (isset($_POST['enabled']))
{
    $enabled =1;
}
else
{
    $enabled=0;
}

$connection = Connect($config['database']);
$sql = "insert into authors(name,email,password,enabled) values('".$display_name."','".$email."','".$password."',".$enabled.")";
$return = Excecute($sql,$connection);
Close($connection);

header("location: /admin/home.php");