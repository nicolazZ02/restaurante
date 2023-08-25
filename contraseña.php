<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contra.css">
    <title>Contraseña</title>
    <style>

</style>

</head>
<body>

    <div class="form">
    
            <a href="iniciar.php">X</a>
      
    <h1>Para recuperar ingrese su correo electronico y cedula</h1>
    <form action="recu.php" method="get">
        <div class="input-container">
        <input type="email" id="correo" class="text-input" name="correo" autocomplete="off" required placeholder="Ingrese su correo"> 
        <label for="correo" class="label">Correo</label>    
    </div>
   <div class="input-container">
    <input type="text" class="text-input" id="cedu" name="cedu" autocomplete="off" required placeholder="Ingrese su cedula">   
    <label for="cedu" class="label">Cedula</label>    
</div>
    <div class="btn">    
        <button type="submit" name="btn">Recuperar</button>
    </div>
    </form>
    </div>
</body>
</html>