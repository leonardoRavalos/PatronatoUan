//$sitio = "/patronato";
$sitio = "";

$(function () {

    tinymce.init({
        selector: 'textarea',
        language: "es_MX",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | sizeselect | fontselect |  fontsizeselect | forecolor backcolor',
        //toolbar2: " | bold italic | ",
        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        save_enablewhendirty: true
    });

    //FIN TINY MCE
    setTimeout(function () {

        $.ajax({
            url: $sitio + '/model/patronato/getMarco.php',
            type: 'GET',
            dataType: 'json'
        }).done(function (json) {

            if (json.code === 200)
                $.each(json.msg, function (i, row) {
                    showPatronato(row['id_patronato'], row['contenido']);
                    $('#imgPat').attr("src", "../uploads/images/" + row['imagen']);
                });
        });


    }, 100);


    $('#frmDocumento').validate({
        rules: {

            nombre: {
                minlength: 3,
                required: true
            },
            archivo: {
                required: true,
                extension: "pdf"
            }
        },
        messages: {

            nombre: {
                required: "Capture el nombre del achivo"
            },
            archivo: {
                required: "Seleccione un archivo",
                extension: "Fórmato inválido de archivo. Solo se adminten con la extendión PDF"
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
            nuevoDocumento();
            return false;
        }
    });
    $('#frmEditDocumento').validate({
        rules: {

            nombre: {
                minlength: 3,
                required: true
            }
        },
        messages: {
            nombre: {
                required: "Capture el nombre del documento"
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
            editarDocumento();
            return false;
        }
    });
    $('#btnGuardar2').on('click', function () {

        updatePatronato();

    });

    $('#btnEditDocumento').on('click', function () {

        $('#frmEditDocumento').submit();

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

                    // str +="<button id='btnCheck' class='btn btn-warning btn-block' onClick='showModalChangeImage(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-picture\"></i> Cambiar Fotografía</button>";

                    str +="<button id='btnEdit' class='btn btn-success'><i class=\"glyphicon glyphicon-edit\"></i> Editar Nombre</button>";
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

function nuevoDocumento() {

    var form = $('form#frmDocumento')[0];
    var data = new FormData(form);

    $.ajax({
        url: $sitio + '/model/documents/newDocument.php',
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