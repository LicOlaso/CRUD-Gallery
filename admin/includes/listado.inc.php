<div class="container">
    <div class="row">
        <div class="col-lg-12 text-lett">
            <h2 class="mt-5">Listado de fotos</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-lett">
            <a href="../admin/home.php?page=new" class="btn btn-lg btn-warning">Nueva foto</a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Autor</th>
                    <th scope="col">Fichero</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Editar</th>
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
                                <td>'.$row['autor'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['created'].'</td>
                                <td>'.$enabled.'</td>
                                <td>
                                    <a href="index.php?page=edit&id='.$row[0].'">
                                        <i class="bi bi-pencil-square"></i>
                                    </a> 
                                </td>
                                <td>
                                    <a href="#" Onclick="delete_post('.$row[0].');">
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


