<?php
include "../common/utils.php";
include "../common/config.php";
include "../common/mysql.php";

$connection = Connect($config['database']);
$sql = "select * from authors Order by name asc;";
$rows = ExcecuteQuery($sql,$connection);
Close($connection);

?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-lett">
            <h2 class="mt-5">Listado de fotos</h2>
        </div>
    </div>
    <div class="row">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        foreach($rows as $row){
                            if ($row['enabled']=="1")
                            {
                                $enabled = '<i class="bi bi-eye"></i>';
                            }else{
                                $enabled = '<i class="bi bi-eye-slash"></i>';
                            }
                            echo '
                            <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$enabled.'</td>
                                <td>'.$row['created'].'</td>
                                <td>
                                    <a href="#" Onclick="delete_post('.$row['id'].');">
                                        <i class="bi bi-trash3"></i>
                                    </a> 
                                </td>
                            </tr>';
                        }
                ?>
                </tbody>
        </table>
    </div>
</div>


