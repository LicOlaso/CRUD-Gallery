<?php
include "../../common/utils.php";
include "../../common/config.php";
include "../../common/mysql.php";

$author_id= $_POST['author_id'];
$name = $_POST['name'];
$text= $_POST['text'];
if(isset($_POST['enabled']))
{
    $enabled = 1;
}
else{
    $enabled = 0;
}
move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/".$_FILES["file"]["name"]);
$fichero = $_FILES["file"]["name"];
$size = $_FILES["file"]["size"];

$connection = Connect($config['database']);
$sql = "insert into images(author_id,name, file,size,text,enabled)
values(".$author_id.",'".$name."','".$fichero."','".$size."','".$text."',".$enabled.")";
$return = Excecute($sql,$connection);
Close($connection);

header("location: /admin/home.php");