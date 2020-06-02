

function agregardatos(Tipo, Marca, Modelo, NumSerie, Calibre){
    if(Tipo==""||Marca==""||Modelo==""||NumSerie==""||Calibre==""){
        alertify.error("Debe ingresar todos los datos");
    }else{

        cadena = "tipo=" + Tipo +
             "&marca=" + Marca +
             "&modelo=" + Modelo +
             "&numserie=" + NumSerie + 
             "&calibre=" + Calibre;
    
        $.ajax({
            type: "POST",
            url:"../php/registrarGuitarra.php",
            data: cadena,
            success: function(r){
                if(r==1){
                    $('#tabla').load('../componentes/tabla.php');
                    alertify.success("Agregado con exito");
                }else{
                    alertify.error("Fallo el servidor");
                }
            }
        });
    }
}

function agregaform(datos){
    d = datos.split('||');

    $('#idpersona').val(d[0]);
    $('#tipoE').val(d[1]);
    $('#marcaE').val(d[2]);
    $('#modeloE').val(d[3]);
    $('#numserieE').val(d[4]);
    $('#calibreE').val(d[5]);
}

function actualizarDatos(){
    id=$('#idpersona').val();
    Tipo=$('#tipoE').val();
    Marca=$('#marcaE').val();
    Modelo=$('#modeloE').val();
    NumSerie=$('#numserieE').val();
    Calibre=$('#calibreE').val();

    cadena = "id=" + id +
             "&tipo=" + Tipo +
             "&marca=" + Marca +
             "&modelo=" + Modelo +
             "&numserie=" + NumSerie + 
             "&calibre=" + Calibre;

             $.ajax({
                type: "POST",
                url:"../php/actualizarGuitarra.php",
                data: cadena,
                success: function(r){
                    if(r==1){
                        $('#tabla').load('../componentes/tabla.php');
                        alertify.success("Agregado con exito");
                    }else{
                        alertify.error("Fallo el servidor");
                    }
                }
            });
}

function preguntarSiNo(id){
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
        function(){ eliminarDatos(id) }
        , function(){ alertify.error('Cancelado')});
}
function eliminarDatos(id){
    cadena= "id=" + id;
    $.ajax({
        type:"POST",
        url:"../php/eliminarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('../componentes/tabla.php');
                alertify.success("Eliminado con exito!");
            }else{
                alertify.error("Fallo el servidor");
            }
        }
    })
}