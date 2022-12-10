// subiendo la foto del usuario
$(".nuevaFoto").change(function(){
    var imagen = this.files[0];
    
    // se valida el formato de la imagen jpg o png

    if(imagen[type] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".nuevaFoto").val("");

        swal({
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG o PNG",
            type: "error",
            confirmButtonText: "Cerrar"
        });
    }else if (imagen["size"] > 2000000){
        $(".nuevaFoto").val("");

        swal({
            title: "Error al subir la imagen",
            text: "La imagen debe pesar menos de 2MB",
            type: "error",
            confirmButtonText: "Cerrar"
        });
    }else{
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){
            var rutaImagen = event.target.result;

            $(".previsualizar").attr("src", rutaImagen);
        })
    }

})

// EDITAR USUARIO 

$(".btnEditarUsuario").click(function(){

    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        cotentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log("respuesta", respuesta);
        }
    })
})