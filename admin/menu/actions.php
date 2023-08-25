<?php
    require("../../conexion/conexion.php");

if(!empty($_POST['busqueda']))   //se envioa por post porque del MAIN.JS viaja por este metodo
    {
        $busqueda=explode(" ",$_POST['busqueda']);    //divide un string en varios string
        $sql="SELECT * FROM menu WHERE cod_menu LIKE '%".$busqueda[0]."%'" ;
        for($i=1; $i < count($busqueda); $i++){
            if(!empty($busqueda[$i])){
                $sql.= "AND name like '%".$busqueda[$i]."%'";
            }
        }

        $sql ="LIMIT 5";
        
        $result = mysqli_query($con, $sql);
        while($item = mysqli_fetch_assoc($result))  //para devolver todo un arreglo de la consulta, es decir las columnas
        {
            echo '
                <li class="item">
                    <div class="img">
                        <img src="'.$item['foto'].'">
                    </div>
                    <div class="title">
                        <h4>'.$item['id_comida'].'</h4>
                    </div>
                    <div class="price">
                        <span>'.$item['precio'].'</span>
                    </div>
                    <div class="btn1">
                        <buton><a href="modify.php?accion=modificar&cod='.$item['id'].'"?>Calificar</a></buton>
                        
                    </div>
                    <div class="btn2">
                        <buton>Modificar</buton>
                    </div>
                    
                </li>
            ';
        }
          
    }

?>