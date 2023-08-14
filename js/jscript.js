$(document).ready(function() {
   
});




// var detalle="";
//         jQuery.each(result,function (i) {
//             detalle+="<tr>";
//             detalle+="<th scope='row'>"+result[i].id +" </th>";
//             detalle+="<td>"+ result[i].nombre+"</td>";
//             detalle+="<td>"+ result[i].codigo+"</td>";
//             detalle+="<td><button type='button' class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' name=''>Actualizar</button><button type='button' class='btn btn-outline-danger'>Eliminar</button></td>"
//             detalle+="</tr>";    
//             });
            
//             jQuery("#tabla_ciudades").append(detalle);
//        },

$(".boton").click(function() {
    var valores = [];

//  traer datos de la tabla
    $(this).parents("tr").find("td").each(function() {
        valores.push($(this).html());
    });


    if (valores.length >= 3) {
        var id = valores[0];
        var nombre = valores[1];
        var raza = valores[2];

        $('#myModal').modal('show');
        $('#id').val(id);
        $('#nombre').val(nombre);
        $('#raza').val(raza);
    }
});

   
    $('#actualizar').click(function() {
        // var id = $("#id").val();
        // var nombre = $("#nombre").val();
        // var raza = $("#raza").val();
  
        // var ruta="id="+id+"nombe="+nombre+"raza="+raza;

        var formData = $("#formulario").serialize();
        $.ajax({
            url: "../Controlador/actualizarController.php",
            type: "POST",
            data: formData,
        })
        location.reload();
     
    });

    $(document).ready(function() {
        $('#guardar').click(function() {
            // Excluir el campo datoExcluir del formulario
            $("#formulario input[name='datoExcluir']").prop("disabled", true);
    
            var formData = $("#formulario").serialize();
            $.ajax({
                url: "../Controlador/appController.php",
                type: "POST",
                data: formData,
            }).done(function() {
                // Recargar la página después de que se haya completado la solicitud AJAX
                location.reload();
            });
        });
    });




const exampleModal = document.getElementById('myModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
  })
}
