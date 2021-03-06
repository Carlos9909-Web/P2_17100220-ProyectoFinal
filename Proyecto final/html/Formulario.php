<?php
  session_start();

  unset($_SESSION['consulta']);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title>Formulario</title>
        <link href='https://css.gg/music-note.css' rel='stylesheet'>
        <link rel="stylesheet" href="../css/IndexFormulario.css" >
        <script src="../js/mainValidar.js"></script>

        <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">
        
        <script src="../librerias/jquery-3.5.1.min.js"></script>
        <script src="../js/funciones.js"></script>
        <script src="../librerias/bootstrap/js/bootstrap.js"></script>
        <script src="../librerias/alertifyjs/alertify.js"></script>
        <script src="../librerias/select2/js/select2.js"></script>

    </head>
    <body>
          <div class="salir">
          <button class="btn btn-info salir" id="salir" onclick="preguntarsino();"> Salir </button>
          </div>

        <div class="contenedor"> 
            <form method="POST" class="form-registrar" action="">
                
                    <h2 class="titulo">Registro de guitarras</h2>

                    <div class="input-cont">
                        <label>Ingrese el tipo de guitarra</label> <br>
                        <input type="text"  id="tipo" name="Tipo" class="input" placeholder="Tipo de guitarra" onblur="revisar(this);" onkeyup="revisar(this);"> <br>
                    </div>

                    <div class="input-cont">
                        <label>Ingrese el nombre de la marca</label> <br>
                        <input type="text"  id="marca" name="Marca" class="input" placeholder="Marca" onblur="revisar(this);" onkeyup="revisar(this);"> <br>
                    </div>

                    <div class="input-cont">
                        <label>Ingrese el nombre del modelo</label> <br>
                        <input type="text"  id="modelo" name="Modelo" class="input" placeholder="Modelo" onblur="revisar(this);" onkeyup="revisar(this);"> <br>
                    </div>

                    <div class="input-cont">
                        <label>Ingrese el numero de serie</label> <br>
                        <input type="text"  id="numserie" name="NumSerie" class="input" placeholder="Numero de serie" onblur="revisar(this);" onkeyup="revisar(this);"> <br>
                    </div>

                    <div class="input-cont">
                        <label>Ingrese el calibre de la cuerda</label> <br>
                        <input type="number" step="any"  id="calibre" name="Calibre"  class="input" placeholder="Calibre" onblur="revisar(this);" onkeyup="revisar(this);"> <br>
                    </div>
                    <div class="input-cont">
                      <input type="reset" value="Aceptar" class="button" id="guardarnuevo">
                  </div>
            </form>
            
        </div>
        
        <div id="buscador"></div>
        <div id="tabla"></div>
        <!-- Modal para editar registros -->
  
  <!-- Modal -->
  <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edita la guitarra</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <input type="text" hidden="" id="idpersona" name="">
            <label>Nombre</label>
          
            <label>Ingrese el tipo de guitarra</label> <br>
            <input type="text" id="tipoE" name="Tipo" class="input" placeholder="Tipo de guitarra" onblur="revisar(this);" onkeyup="revisar(this);"> <br>

            <label>Ingrese el nombre de la marca</label> <br>
            <input type="text" id="marcaE" name="Marca" class="input" placeholder="Marca" onblur="revisar(this);" onkeyup="revisar(this);"> <br>

            <label>Ingrese el nombre del modelo</label> <br>
            <input type="text" id="modeloE" name="Modelo" class="input" placeholder="Modelo" onblur="revisar(this);" onkeyup="revisar(this);"> <br>

            <label>Ingrese el numero de serie</label> <br>
            <input type="text" id="numserieE" name="NumSerie" class="input" placeholder="Numero de serie" onblur="revisar(this);" onkeyup="revisar(this);"> <br>

            <label>Ingrese el calibre de la cuerda</label> <br>
            <input type="number" step="any" id="calibreE" name="Calibre"  class="input" placeholder="Calibre" onblur="revisar(this);" onkeyup="revisar(this);"> <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
        
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('../componentes/tabla.php');
        $('#buscador').load('../componentes/buscador.php');
    })
</script>

<script type="text/javascript">
  $(document).ready(function(){
      $('#guardarnuevo').click(function(){
        Tipo =$('#tipo').val();
        Marca =$('#marca').val();
        Modelo =$('#modelo').val();
        NumSerie =$('#numserie').val();
        Calibre =$('#calibre').val();
        agregardatos(Tipo, Marca, Modelo, NumSerie, Calibre);
      });

      $('#actualizadatos').click(function(){
        actualizarDatos();
      });
  });
</script>