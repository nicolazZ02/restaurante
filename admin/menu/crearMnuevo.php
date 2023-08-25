<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post" enctype="multipart/form-data" id="formulario">
                <label for="">Numero de menu:</label><br>
                <input type="number" name="docu" id="" placeholder="Numero de Menu">
                <input type="hidden" name="estado" value="<?php echo($menu['id_esta'])?>" id=""><br>
                <label for="">Comida o bebida</label><br>
                <select name="comida" id="">
                    <option>Seleccione...</option>
                    <?php
                        $sql1="SELECT * FROM tipo_comida WHERE id_comida <= 100";
                        $result1=$bd->prepare($sql1);
                        $result1->execute(array());

                        while ($menus=$result1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo($menus['id_comida'])?>"><?php echo($menus['tipo_comida'])?></option>
                            <?php
                        }
                    ?>
                </select><br>
                <label for="">Precio oferta</label><br>
                <input type="number" name="oferta" id="" placeholder="Ingrese precio oferta"><br>
                <label for="">Precio</label><br>
                <input type="email" name="precio" id="" placeholder="Ingrese el precio"><br>
                <label for="">Tiempo estimado</label>
                <input type="text" name="time" placeholder="Ingrese el tiempo estimado">
                <label for="">foto</label><br>
                <input type="file" name="foto" id=""><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="crear" id="enviar" class="btn btn-primary">Crear menu</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="../../js/menu.js"></script>
</body>
</html>