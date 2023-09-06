//$sitio = "/patronato";
$sitio = "";

$(function () {

    $('#frmNewFile').validate({
        rules: {
            nombre:{
                required: true
            }
            ,file: {
                required: true,
                extension: "pdf"
            }
        },
        messages: {
            nombre:{
                required: "Ingrese el nombre del documento."
            },
            file: {
                required: "Seleccione un archivo",
                extension: "Fórmato inválido de archivo, solo se adminten en formato PDF."
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            newRecaudacion();
            return false;
        }
    });//FIN DE FORMULARIO DE NUEVO MIEMBRO



    $('#btnGuardar2').on('click', function () {

        updatePatronato();

    });

    $('#btnArchivo').on('click', function () {

        showModalNewFile();

    });

    $('#btnNewFile').on('click', function () {

        $('#frmNewFile').submit();

    });


//----------------------------------FIN VALIDATE------------------------------------------------------
    var table =  $('#tbDocumentos').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url: $sitio + '/model/documents/getDocuments.php',
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"id_documento"
            },
            {
                data:"nombre"
            },
            {
                data:"archivo"
            },
            {
                data: function (row) {
                    str = "<div align='center'>";

                    str +="<button id='btnCheck' class='btn btn-warning' onClick='showModalChangeFile(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-file\"></i> Cambiar Archivo</button>";

                    str +="&nbsp;&nbsp;<button id='btnEdit' class='btn btn-success'><i class=\"glyphicon glyphicon-edit\"></i> Editar Nombre</button>";
                    str +="&nbsp;&nbsp;<button id='btnDelete' class='btn btn-danger' onClick='borrarDocumento(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";
                    str += "</div>"
                    return str;
                }

            }
        ]
    });//fin de datatable

    $('#tbDocumentos tbody').on('click', '.btn-success', function () {
        if (table.row(this).child.isShown()) {
            var data = table.row(this).data();
        } else {
            var data = table.row($(this).closest('tr')).data();
        }

        showDocumento(data[Object.keys(data)[0]],data[Object.keys(data)[1]])

    });




});// fin Function
function showModalChangeFile() {
    $('#id_patronato').val(2);
    $('#modalChangeFile').modal("show");
}

function showModalNewFile() {
    $('#id_patronato').val(2);
    $('#modalNewFile').modal("show");
}
function showPatronato(id_patronato, contenido) {

    $id_patronato = id_patronato;
    tinyMCE.activeEditor.setContent(contenido);
}
function updatePatronato() {
    $contenido = tinyMCE.activeEditor.getContent();


    $.ajax(
        {
            url: $sitio + '/model/patronato/updatePatronato.php' ,
            type: "post",
            data: {
                id_patronato: $id_patronato,
                contenido: $contenido
            }
        }
    ).done(
        function (data) {

            if (data.code == 200) {
                swal({
                        title: "Guardado",
                        text: data.msg,
                        type: "success"
                    },
                    function () {
                        location.reload();
                    });

            } else {
                swal({
                    title: "Error",
                    text: data.msg,
                    type: "error"
                });
            }
        }
    ).fail(
        function () {
            swal({
                title: "Error",
                text: "El servidor no está disponible",
                type: "error"
            });
        }
    );
}

function showDocumento(id_documento,nombre){
    $('#id_documento').val(id_documento);
    $('#nombre2').val(nombre);
    $('#modalDocumento').modal("show");


}

function newRecaudacion() {

    var form = $('form#frmNewFile')[0];
    var data = new FormData(form);

    $.ajax({
        url: $sitio + '/model/recaudacion/newRecaudacion.php',
        type: "post",
        data: data,
        cache: false,
        contentType: false,
        processData: false
    }).done(function (json) {

        if (json.code === 200) {
            swal({
                    title: "Guardado",
                    text: json.msg,
                    type: "success"
                },
                function () {
                    location.reload();
                });
        }
        else{
            swal({
                    title: "Error",
                    text: json.msg,
                    type: "error"
                },
                function () {

                });
        }

    });//fin de combobox


}

function editarDocumento() {

    $.ajax(
        {
            url: $sitio + '/model/documents/updateDocument.php',
            type: "post",
            data: {
                id_documento: $('#id_documento').val(),
                nombre: $('#nombre2').val(),

            }
        }
    ).done(
        function (data) {
            //alert("Se realizó correctamente "+data.code);
            if (data.code == 200) {
                //$.growl.notice({message: data.msg});

                swal("Guardado", data.msg, "success");
                $('#tbDocumentos').dataTable().api().ajax.reload();
                $('#modalDocumento').modal("toggle");
                $('#id_usuario').val('');
            } else {
                $.growl.error({message: data.msg});
            }
        }
    ).fail(
        function () {
            swal("Error", "El servidor no está disponible", "error");
        }
    );
}

function borrarDocumento(id_documento) {

    swal(
        {
            title: "Advertencia", text: "¿Estás seguro que deseas eliminar este documento?",
            type: "warning", showCancelButton: true,
            confirmButtonColor: "#DD6B55", confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar", closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                ///Comienza a Borrar
                $.ajax(
                    {
                        url: $sitio + '/model/documents/deleteDocument.php',
                        type: "post",
                        data: {id_documento: id_documento}
                    }
                ).done(
                    function (data) {
                        if (data.code == 200) {

                            swal("Eliminado", "El documento se eliminó correctamente", "success");
                            $('#tbDocumentos').dataTable().api().ajax.reload();
                            $('#id_documento').val('');
                        } else {
                            $.growl.error({message: data.msg});
                        }
                    }
                ).fail(
                    function () {
                        $.growl.error({message: "El servidor no está disponible :("});
                    }
                );
            } else {
                swal("Cancelado", "Acción Cancelada", "error");
            }
        });

}