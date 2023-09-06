$sitio = "";
//$sitio = "/patronato";

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

    $.ajax({
        url: $sitio + '/model/categories/getCategories.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json) {

        if (json.code === 200)
            $.each(json.msg, function (i, row) {

                $('<option></option>', {text: row.nombre}).attr('value', row.id_categoria).appendTo('#id_categoria');
            });
    });//fin de combobox

    $.ajax({
        url: $sitio + '/model/categories/getCategories.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json) {

        if (json.code === 200)
            $.each(json.msg, function (i, row) {

                $('<option></option>', {text: row.nombre}).attr('value', row.id_categoria).appendTo('#id_categoria2');
            });
    });//fin de combobox


    $('#frmProyecto').validate({
        rules: {

            nombre: {
                minlength: 3,
                required: true
            },
            imagen: {
                required: true,
                extension: "png|jpeg|jpg|gif"
            }
        },
        messages: {

            nombre: {
                required: "Capture el nombre del proyecto"
            },
            imagen: {
                required: "Seleccione una imagen",
                extension: "Fórmato inválido de archivo. Solo se adminten .png, .jpeg, .jpg y .gif"
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
            nuevoProyecto();
            return false;
        }
    });

    $('#frmEditProyecto').validate({
        rules: {

            nombre: {
                minlength: 3,
                required: true
            }
        },
        messages: {
            nombre: {
                required: "Capture el nombre del proyecto"
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
            editarProyecto();
            return false;
        }
    });


    $('#btnEditProyecto').on('click', function () {

        $('#frmEditProyecto').submit();

    });


//----------------------------------FIN VALIDATE------------------------------------------------------
    var table = $('#tbProyectos').DataTable({
        responsive: true,
        language: {
            url: "http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax: {
            url: $sitio + '/model/projects/getProjects.php',
            dataSrc: function (json) {

                return json['msg'];
            }
        },
        columns: [
            {
                data: "id_proyecto"
            },
            {
                data: function (row) {
                    str = "<div align = 'center'>";
                    str += "&nbsp <img src=" + $sitio + "../uploads/images/" + row['imagen'] + " width='100' height='100'>";
                    str += "</div>"
                    return str;
                }
            },
            {
                data: "nombre"
            },
            {
                data: "nombre_categoria"
            },
            {
                data: function (row) {
                    str = "<div align='center'>";

                    str += "<button id='btnCheck' class='btn btn-warning btn-block' onClick='showModalChangeImage(" + row['id_proyecto'] + ")'><i class=\"glyphicon glyphicon-picture\"></i> Cambiar Fotografía</button>";
                    str += "<button id='btnEdit' class='btn btn-success btn-block'><i class=\"glyphicon glyphicon-edit\"></i> Editar</button>";
                    str += "<button id='btnDelete' class='btn btn-danger btn-block' onClick='borrarProyecto(" + row['id_proyecto'] + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";
                    str += "</div>"
                    return str;
                }

            }
        ]
    });//fin de datatable

    $('#tbProyectos tbody').on('click', '.btn-success', function () {
        if (table.row(this).child.isShown()) {
            var data = table.row(this).data();
        } else {
            var data = table.row($(this).closest('tr')).data();
        }

        showProyecto(data[Object.keys(data)[0]], data[Object.keys(data)[1]], data[Object.keys(data)[2]], data[Object.keys(data)[4]], data[Object.keys(data)[3]])

    });



    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');

        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }

    $('.modal').on('show.bs.modal', reposition);

    $(window).on('resize', function () {
        $('.modal:visible').each(reposition);
    });//fin reposition


});// fin Function

$(document).ready(function () {

    $('#frmChangeFile').submit(function (e) {

        if ($('#imagen2').val()) {
            e.preventDefault();
            $('#loader-icon').show();
            $(this).ajaxSubmit({
                url: $sitio + '/model/projects/changeCover.php',
                type: "post",
                target: '#targetLayer',
                beforeSubmit: function () {
                    $("#progress-bar").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    $("#progress-bar").width(percentComplete + '%');
                    $("#progress-bar").html('<div id="progress-status">' + percentComplete + ' %</div>')
                },
                success: function () {
                    $('#loader-icon').hide();
                    $("#progress-bar").width('0%');
                    $('#tbProyectos').dataTable().api().ajax.reload();
                    $('#modalChangeFile').modal("toggle");

                },
                resetForm: true
            });
            return false;
        }
    });
});//fin submit SUBIR ARCHIVO y PROGRESS BAR


function showProyecto(id_proyecto, nombre, descripcion, imagen, categoria) {
    $('#id_proyecto').val(id_proyecto);
    $('#nombre2').val(nombre);
    $('#id_categoria2').val(categoria);
    tinymce.get('descripcion2').setContent(descripcion);
    $('#modalProyecto').modal("show");


}

function showModalChangeImage(articleid, type) {

    $('#id_proyecto2').val(articleid);
    $('#imagen2').val(type);
    $('#modalChangeFile').modal("show");
}//Mostrar Modal Archivo Multimedia

function nuevoProyecto() {

    var form = $('form#frmProyecto')[0];
    var data = new FormData(form);

    $.ajax({
        url: $sitio + '/model/projects/newProject.php',
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
        else {
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

function editarProyecto() {
    $descripcion = tinyMCE.get('descripcion2').getContent();
    $.ajax(
        {
            url: $sitio + '/model/projects/updateProject.php',
            type: "post",
            data: {
                id_proyecto: $('#id_proyecto').val(),
                nombre: $('#nombre2').val(),
                id_categoria: $('#id_categoria2').val(),
                descripcion: $descripcion,
            }
        }
    ).done(
        function (data) {
            //alert("Se realizó correctamente "+data.code);
            if (data.code == 200) {
                //$.growl.notice({message: data.msg});

                swal("Guardado", data.msg, "success");
                $('#tbProyectos').dataTable().api().ajax.reload();
                $('#modalProyecto').modal("toggle");
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

function borrarProyecto(id_proyecto) {

    swal(
        {
            title: "Advertencia", text: "¿Estás seguro que deseas eliminar este proyecto?",
            type: "warning", showCancelButton: true,
            confirmButtonColor: "#DD6B55", confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar", closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                ///Comienza a Borrar
                $.ajax(
                    {
                        url: $sitio + '/model/projects/deleteProject.php',
                        type: "post",
                        data: {id_proyecto: id_proyecto}
                    }
                ).done(
                    function (data) {
                        if (data.code == 200) {

                            swal("Eliminado", "El proyecto se eliminó correctamente", "success");
                            $('#tbProyectos').dataTable().api().ajax.reload();
                            $('#id_proyecto').val('');
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