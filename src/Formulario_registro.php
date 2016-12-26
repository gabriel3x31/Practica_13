<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="esti.css">
<script src="miscript.js"></script>


</head>

<body>
<h1 align="center">Agenda personal</h1>
<div class="ejemplos">
<h1>Agregar Contacto</h1>
<p>Vamos a poder guardar varios contactos</p>
      <div id="agregarNuevo">
        <button class="btn btn-primary" onclick="mostrarFormulario();">Agregar nuevo</button> 
      </div> 
<div class="container">  
<form name="form1" method="get" id="formulario" style="display: none;" action="insertar_contacto.php">
  <table border="0">
    <tr>
      <td>Nombres:</td>
      <td><label for="noms"></label>
      <input class="form-control" type="text" name="noms" id="noms"></td>
    </tr>
    <tr>
      <td>Apellidos:</td>
      <td><label for="apell"></label>
      <input class="form-control" type="text" name="apell" id="apell"></td>
    </tr>
    <tr>
      <td>Numero de casa:</td>
      <td><label for="n_casa"></label>
      <input class="form-control" type="number" name="n_casa" id="n_casa"></td>
    </tr>
    <tr>
      <td>Numero de trabajo:</td>
      <td><label for="n_trabajo"></label>
      <input class="form-control" type="number" name="n_trabajo" id="n_trabajo"></td>
    </tr>
    <tr>
      <td>Correo electronico:</td>
      <td><label for="co_el"></label>
      <input class="form-control" type="email" name="co_el" id="co_el"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" act></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</div>
</div>  
<div class="ejemplos">
<h1>Buscar Contactos</h1>
<p>Vamos a poder buscar un contacto por sus nombres y apellidos</p>
      <div id="agregarNuevo">
        <button class="btn btn-primary" onclick="mostrarFormulario1();">Buscar</button> 
      </div>
<div class="container">         
<form name="form1" method="get" id="formulario1" style="display: none;" action="buscar_contacto.php">
  <table border="0">
    <tr>
      <td>Nombres:</td>
      <td><label for="nombs"></label>
      <input class="form-control" type="text" name="nombs" id="nombs"></td>
    </tr>
    <tr>
      <td>Apellidos:</td>
      <td><label for="apelli"></label>
      <input class="form-control" type="text" name="apelli" id="apelli"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" act></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</div>
      <div id="listaAn">
            

      </div>

    </div>

    <div class="ejemplos">
    <h1>Eliminar Contacto</h1>
    <p>Vamos a poder eliminar un contacto por sus nombres y apellidos</p>
      <div id="agregarNuevo">
        <button class="btn btn-primary" onclick="mostrarFormulario2();">Eliminar</button> 
      </div>
<div class="container">        
<form name="form2" method="get" id="formulario2" style="display: none;" action="eliminar_contacto.php">
  <table border="0">
    <tr>
      <td>Nombres:</td>
      <td><label for="nomb"></label>
      <input class="form-control" type="text" name="nomb" id="nomb"></td>
    </tr>
    <tr>
      <td>Apellidos:</td>
      <td><label for="apel"></label>
      <input class="form-control" type="text" name="apel" id="apel"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" act></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</div>
    </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>