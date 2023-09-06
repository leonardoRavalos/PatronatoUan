//$sitio = "/patronato"
$sitio = ""
$(function () {


    $('#frmEditSection').validate({
        rules: {
            nombreSeccion2: {
                minlength: 3,

                required: true
            }
        },
        messages: {
            nombreSeccion2: {
                minlength: "Introduzca al menos 3 caracteres",

                required: "Capture el nombre de la categoria"
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
            updateSection();
            return false;
        }
    });


    $('#btnModificar').on('click', function () {

        $('#frmEditSection').submit();

    });


    $('#tbSecciones').DataTable({
        responsive: true,
        language: {
            url: "http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax: {
            url: $sitio + '/model/sections/getSections.php',
            dataSrc: function (json) {

                return json['msg'];
            }
        },
        columns: [
            {
                data: "id_seccion"
            },
            {
                data: "nombre_seccion"
            },
            {
                data: "categoria_seccion"
            },
            {
                data: function (row) {
                    str = "<div align='center' >";
                    str += "<button id='btnEditar' class='btn btn-success' onClick='showSection(" + row['id_seccion'] + ",\"" + row['nombre_seccion'] + "\")'><i class=\"glyphicon glyphicon-edit\"></i> Editar</button>";
                    str += "</div>"
                    return str;
                }

            }

        ]
    }); // FIN D


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

});

function showSection(sectionid, nombresection) {
    $('#sectionid').val(sectionid);
    $('#nombreSeccion2').val(nombresection);
    $('#modalSection').modal("show");

}



function updateSection() {

    $.ajax(
        {
            url: $sitio + '/model/sections/updateSection.php',
            type: "post",
            data: {
                id_seccion: $('#sectionid').val(),
                nombre_seccion: $('#nombreSeccion2').val()
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
                        $('#tbSecciones').dataTable().api().ajax.reload();
                        $('#modalSection').modal("toggle");
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
                text: data.msg,
                type: "error"
            });
        }
    );
}

