<?php
include "../common/utils.php";
include "../common/config.php";
include "../common/mysql.php";

$connection = Connect($config['database']);
$sql = "select A.*, B.name as autor from images as A inner join authors as B on A.author_id = B.id Order by A.id Desc;";
$rows = ExcecuteQuery($sql,$connection);
Close($connection);

