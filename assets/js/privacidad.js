//$sitio = "/patronato";
$sitio = "";

$(function () {




    $('#frmChangeFile').validate({
        rules: {

            archivo: {
                required: true,
                extension: "pdf"
            }
        },
        messages: {


            archivo: {
                required: "Seleccione un archivo",
                extension: "Fórmato inválido de archivo. Solo se admite PDF."
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
            changeFile();
            return false;
        }
    });//FIN DE FORMULARIO DE NUEVO MIEMBRO

  

    $('#btnChangeFile').on('click', function () {

        $('#frmChangeFile').submit();

    });

 

//----------------------------------FIN VALIDATE------------------------------------------------------
    var tablePrivacidad=  $('#tbPrivacidad').DataTable({
        responsive: true,
        language:{
            url:"https://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url: $sitio + '/model/privacidad/getPrivacidad.php',
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"id_privacidad"
            },
            {
                data:"nombre"
            },
            {
                data:"nombre_archivo"
            },
            {
                data: function (row) {
                    str = "<div align='center'>";
                    str +="<button id='btnCheck' class='btn btn-success ' onClick='showModalChangeFile(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-edit\"></i> Cambiar nombre</button>";
                    str +="&nbsp;&nbsp;<button id='btnEdit' class='btn btn-primary'><i class=\"glyphicon glyphicon-picture\"></i> Cambiar archivo</button>";
                    // str +="&nbsp;&nbsp;<button id='btnDelete' class='btn btn-danger' onClick='borrarDocumento(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";
                    str += "</div>"
                    return str;
                }

            }
        ]
    });//fin de datatable

    $('#tbPrivacidad tbody').on('click', '.btn-primary', function () {
        if (tablePrivacidad.row(this).child.isShown()) {
            var data = tablePrivacidad.row(this).data();
        } else {
            var data = tablePrivacidad.row($(this).closest('tr')).data();
        }

        showModalChangeFile(data[Object.keys(data)[0]])

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


function showModalChangeFile(id_privacidad) {

    $('#id_privacidad').val(id_privacidad);
    $('#modalChangeFile').modal("show");
}

function changeFile() {
    var form = $('form#frmChangeFile')[0];
    var data = new FormData(form);

    $('#loader-icon').show();

    $.ajax({
        url: $sitio + '/model/privacidad/changeFile.php',
        type: "post",
        data: data,
        cache: false,
        contentType: false,
        processData: false

    }).done(
        function (data) {

            if (data.code === 200) {
                $('#loader-icon').hide();
                swal({
                        title: "Guardado",
                        text: data.msg,
                        type: "success"
                    },
                    function () {
                        location.reload();
                    });
            }
            else {
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
                text: "El servidor no se encuentra disponible",
                type: "error"
            });
        }
    );
}

