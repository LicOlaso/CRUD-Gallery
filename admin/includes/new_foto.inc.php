<?php
include "../common/utils.php";
include "../common/config.php";
include "../common/mysql.php";

$connection = Connect($config['database']);
$sql = "select * from authors Order by name asc";
$rows = ExcecuteQuery($sql,$connection);
Close($connection);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-lett">
            <h2 class="mt-5">Añadir Foto</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
            <form role="form" method="post" action="actions/new_foto.act.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="author_id" class="col-lg-2 col-form-label">Autor</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="author_id" id="author_id">
                            <?php
                                foreach($rows as $row)
                                {
                                    echo "<option value=".$row[0].">".$row[1]."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-lg-2 col-form-label">Nombre</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="name" name="name" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="File" class="col-lg-2 col-form-label">Fichero</label>
                    <div class="col-lg-4">
                        <input type="File" class="form-control" id="file" name="file">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-lg-2 col-form-label">Texto</label>
                    <div class="col-lg-4">
                        <textarea name="text" id="text" cols="60" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="enabled" class="col-lg-2 col-form-label">Activado</label>
                    <div class="col-lg-3">
                        <input type="checkbox" id="enabled" name="enabled">
                    </div>
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>