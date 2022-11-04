<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-image: url(establo.jpg);
	background-attachment:fixed;
	background-size: 100% 100%;
}
.Estilo1 {color: #FFFFFF}
.Estilo2 {font-family: Rockwell}
.Estilo3 {
	color: #FFFFFF;
	font-family: Rockwell;
	font-weight: bold;
}
.Estilo4 {
	color: #acec3c;
	font-size: 36pt;
}
.Estilo6 {font-family: Rockwell; font-size: 18px; color: #FFFFFF; }
.Estilo7 {color: #000000}
-->
</style></head>
<body>
<!-- formulario registro -->
<form method="post" action="registro.php" >
  <div align="center">
    <fieldset>
    <br>
    </fieldset>
  </div>
  <fieldset>
<br>
<br>
<br>
<br>
  <div align="center">
        <legend class="Estilo4 Estilo2">Registro</legend>
  </div>
    <div class="form-group">
      <div align="center"><span class="Estilo2">
      </span></div>
      <span class="Estilo2"><label style="font-size: 14pt">      </label>
      </span>
      <label style="font-size: 14pt"><div align="center" class="Estilo3">
        <div align="center">Ingresa nombre de usuario:</div>
      </div>
      <div align="center">
        </label>
        

        <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre"  size="50">
      </div>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;">
      <div align="center" class="Estilo3">
        <div align="center">Ingresa apellido paterno :</div>
      </div>
      <div align="center">
        </label>
        
        <input type="text" name="appat" class="form-control"  required placeholder="Ingresa tu apellido"  size="50"/>
      </div>
      <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;">
      <div align="center" class="Estilo3">
        <div align="center">Ingresa  apellido materno :</div>
      </div>
      <div align="center">
        </label>
        
        <input type="text" name="apmat" class="form-control"  required placeholder="Ingresa tu apellido"  size="50"/>
      </div>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;">
      <div align="center" class="Estilo3">
        <div align="center">Ingresa tu email:</div>
      </div>
      <div align="center">
        </label>
        
        <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"  size="50"/>
      </div>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;">
      <div align="center" class="Estilo2 Estilo1">
        <div align="center"><b>Ingresa tu Password</b>:</div>
      </div>
      <div align="center">
        <p><input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" size="50"  height=25px/>
        </p>
        <div align="center" class="Estilo2 Estilo1">
          <div align="center"><b>Ingresa tu ciudad/departamento: </b></div>
        </div>
        <div align="center">
          </label>
          <input name="ciudad"  class="form-control"  height=25px  placeholder="Ingresa ciudad" size="50"/>
        </div>
      </div>
    </div>
    <div class="form-group"><div align="center" class="Estilo3">
      <div align="center">Repite tu contraseña:</div>
      </div>
      <div align="center">
        <p>
          <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" width=280px  size="50"/>
        </p>
        <p class="Estilo6"><span class="Estilo7">Sexo:</span> 
          <label>
          <span class="Estilo7">M
          <input name="gen" type="radio" value="radiobutton">
          F          </span></label>
          <span class="Estilo7">
          <label>          </label>
          </span>
          <label>
          <input name="gen" type="radio" value="radiobutton">
          </label>
        </p>
        <p>
          <input type="submit" name="submit" value="Registrarse" />
        </p>
        <br>
        <br>
    <br>
    <br>
</form>

<!--Fin formulario registro -->
<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>
      
  </div>
  </div>
      
    
  <div align="center"></div>
      </div>
  </fieldset>

  
</body>
</html>





