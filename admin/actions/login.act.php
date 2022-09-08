<?php
include "../../common/utils.php";
include "../../common/config.php";
include "../../common/mysql.php";

$email_login = $_POST['email-address'];
$login_password = md5($_POST['password']);

$connection = Connect($config['database']);
$sql = "select * from authors where email ='".$email_login."' And password ='".$login_password."'";
$rows = ExcecuteQuery($sql,$connection);
Close($connection);

debug($rows);

if(empty($rows)){
    header("location: ../error.php?error=1");
}
else{
    session_start();
    $_SESSION['id'] = $rows[0]['id'];
    $_SESSION['email'] = $rows[0]['email'];
    $_SESSION['sesion_id'] = session_id();
    header("location: ../home.php?page=listado");
}