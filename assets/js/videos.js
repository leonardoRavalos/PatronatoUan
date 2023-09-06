//$sitio = "/patronato";
$sitio = "";

$(function () {


    $('#frmVideo').validate({
        rules: {

            nombre: {
                minlength: 3,
                required: true
            },
            archivo: {
                required: true,
                extension: "mp4|mov"
            }
        },
        messages: {

            nombre: {
                required: "Capture el nombre del video"
            },
            archivo: {
                required: "Seleccione un archivo",
                extension: "Fórmato inválido de archivo. Solo se adminten con la extensión MP4 y MOV"
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
            // nuevoVideo();
            return false;
        }
    });
    $('#frmEditVideo').validate({
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
            editarVideo();
            return false;
        }
    });
    $('#btnGuardar2').on('click', function () {

        updatePatronato();

    });

    $('#btnEditVideo').on('click', function () {

        $('#frmEditVideo').submit();

    });


//----------------------------------FIN VALIDATE------------------------------------------------------
    var table = $('#tbVideos').DataTable({
        responsive: true,
        language: {
            url: "http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax: {
            url: $sitio + '/model/projects/getVideos.php',
            dataSrc: function (json) {

                return json['msg'];
            }
        },
        columns: [
            {
                data: "id_video"
            },
            {
                data: "nombre_video"
            },
            {
                data: "nombre_archivo"
            },
            {
                data: function (row) {
                    str = "<div align='center'>";

                    str += "<button id='btnCheck' class='btn btn-warning' onClick='showModalChangeFile(" + row['id_video'] + ")'><i class=\"glyphicon glyphicon-file\"></i> Cambiar Archivo</button>";

                    str += "&nbsp;&nbsp;<button id='btnEdit' class='btn btn-success'><i class=\"glyphicon glyphicon-edit\"></i> Editar Nombre</button>";
                    str += "&nbsp;&nbsp;<button id='btnDelete' class='btn btn-danger' onClick='borrarVideo(" + row['id_video'] + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";
                    str += "</div>"
                    return str;
                }

            }
        ]
    });//fin de datatable

    $('#tbVideos tbody').on('click', '.btn-success', function () {
        if (table.row(this).child.isShown()) {
            var data = table.row(this).data();
        } else {
            var data = table.row($(this).closest('tr')).data();
        }

        showVideo(data[Object.keys(data)[0]], data[Object.keys(data)[1]])

    });


});// fin Function
function showModalChangeFile(id_video) {
    $('#id_video2').val(id_video);
    $('#modalChangeFile').modal("show");

    console.log("ID VIDEO: " + $('#id_video').val());
}


function showVideo(id_video, nombre) {
    $('#id_video').val(id_video);
    $('#nombre2').val(nombre);
    $('#modalVideo').modal("show");


}

$(document).ready(function () {

    $('#frmVideo').submit(function (e) {


        e.preventDefault();
        $('#loader-icon').show();
        $(this).ajaxSubmit({
            url: $sitio + '/model/projects/newVideo.php',
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
                swal({
                    title: "Guardado",
                    text: "Video guardado satisfactoriamente",
                    type: "success"
                });

                $("#progress-bar").width('0%');
                $('#tbVideos').dataTable().api().ajax.reload();
            },
            resetForm: true
        });
        return false;

    });

    //---------------------------------------------------CAMBIAR ARCHIVO----------------------------------------------
    $('#frmChangeFile').submit(function (e) {
        e.preventDefault();
        $('#loader-icon').show();
        $(this).ajaxSubmit({
            url: $sitio + '/model/projects/changeVideo.php',
            type: "post",
            target: '#targetLayer-modal',
            beforeSubmit: function () {
                $("#progress-bar-modal").width('0%');
            },
            uploadProgress: function (event, position, total, percentComplete) {
                $("#progress-bar-modal").width(percentComplete + '%');
                $("#progress-bar-modal").html('<div id="progress-status">' + percentComplete + ' %</div>')
            },
            success: function () {

                $('#loader-icon').hide();

                swal({
                    title: "Guardado",
                    text: "Video guardado satisfactoriamente",
                    type: "success"
                },
                    function () {

                        $("#progress-bar-modal").width('0%');
                        $('#tbVideos').dataTable().api().ajax.reload();
                        $('#modalChangeFile').modal("toggle");
                    });

            },
            resetForm: true
        });
        return false;


    });

});//fin submit SUBIR ARCHIVO y PROGRESS BAR


function editarVideo() {

    $.ajax(
        {
            url: $sitio + '/model/projects/updateVideo.php',
            type: "post",
            data: {
                id_video: $('#id_video').val(),
                nombre: $('#nombre2').val(),

            }
        }
    ).done(
        function (data) {
            //alert("Se realizó correctamente "+data.code);
            if (data.code == 200) {
                //$.growl.notice({message: data.msg});

                swal("Guardado", data.msg, "success");
                $('#tbVideos').dataTable().api().ajax.reload();
                $('#modalVideo').modal("toggle");
                $('#id_video').val('');
            } else {

                swal("Error", data.msg, "error");

            }
        }
    ).fail(
        function () {
            swal("Error", "El servidor no está disponible", "error");
        }
    );
}

function borrarVideo(id_video) {

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
                        url: $sitio + '/model/projects/deleteVideo.php',
                        type: "post",
                        data: {id_video: id_video}
                    }
                ).done(
                    function (data) {
                        if (data.code == 200) {

                            swal("Eliminado", "El documento se eliminó correctamente", "success");
                            $('#tbVideos').dataTable().api().ajax.reload();

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