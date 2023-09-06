//$sitio = "/patronato";
$sitio = "";

$(function () {




    $('#frmChangeImage').validate({
        rules: {

            imagen: {
                required: true,
                extension: "png|jpeg|jpg|gif"
            }
        },
        messages: {


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
            changeImage();
            return false;
        }
    });//FIN DE FORMULARIO DE NUEVO MIEMBRO

     $('#frmChangeImageInfra').validate({
        rules: {

            imagen: {
                required: true,
                extension: "png|jpeg|jpg|gif"
            }
        },
        messages: {


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
            changeImageInfra();
            return false;
        }
    });//FIN DE FORMULARIO DE NUEVO MIEMBRO


    $('#btnChangeImage').on('click', function () {

        $('#frmChangeImage').submit();

    });

    $('#btnChangeImageInfra').on('click', function () {

        $('#frmChangeImageInfra').submit();

    });


//----------------------------------FIN VALIDATE------------------------------------------------------
    var tablePortada=  $('#tbPortada').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url: $sitio + '/model/cover/getCovers.php',
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"id_portada"
            },
            {
                data: function (row) {
                    str = "<div align = 'center'>";
                    str += "&nbsp <img src=" + $sitio + "../uploads/cover/" + row['imagen'] + " width='100' height='100'>";
                    str += "</div>"
                    return str;
                }
            },
            {
                data:"descripcion"
            },
            {
                data:"imagen"
            },
            {
                data: function (row) {
                    str = "<div align='center'>";

                    // str +="<button id='btnCheck' class='btn btn-warning btn-block' onClick='showModalChangeImage(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-picture\"></i> Cambiar Fotografía</button>";

                    str +="<button id='btnEdit' class='btn btn-primary'><i class=\"glyphicon glyphicon-picture\"></i> Cambiar Imagen</button>";
                    // str +="&nbsp;&nbsp;<button id='btnDelete' class='btn btn-danger' onClick='borrarDocumento(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";
                    str += "</div>"
                    return str;
                }

            }
        ]
    });//fin de datatable

    $('#tbPortada tbody').on('click', '.btn-primary', function () {
        if (tablePortada.row(this).child.isShown()) {
            var data = tablePortada.row(this).data();
        } else {
            var data = tablePortada.row($(this).closest('tr')).data();
        }

        showModalChangeImage(data[Object.keys(data)[0]])

    });


    var table =  $('#tbInfra').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url: $sitio + '/model/projects/getCover.php',
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"id_portada"
            },
            {
                data: function (row) {
                    str = "<div align = 'center'>";
                    str += "&nbsp <img src=" + $sitio + "../uploads/cover/" + row['imagen'] + " width='100' height='100'>";
                    str += "</div>"
                    return str;
                }
            },
            {
                data:"descripcion"
            },
            {
                data:"imagen"
            },
            {
                data: function (row) {
                    str = "<div align='center'>";

                    // str +="<button id='btnCheck' class='btn btn-warning btn-block' onClick='showModalChangeImage(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-picture\"></i> Cambiar Fotografía</button>";

                    str +="<button id='btnEdit' class='btn btn-primary'><i class=\"glyphicon glyphicon-picture\"></i> Cambiar Imagen</button>";
                    // str +="&nbsp;&nbsp;<button id='btnDelete' class='btn btn-danger' onClick='borrarDocumento(" + row['id_documento']  + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";
                    str += "</div>"
                    return str;
                }

            }
        ]
    });//fin de datatable

    $('#tbInfra tbody').on('click', '.btn-primary', function () {
        if (table.row(this).child.isShown()) {
            var data = table.row(this).data();
        } else {
            var data = table.row($(this).closest('tr')).data();
        }

        showModalChangeImageInfra(data[Object.keys(data)[0]])

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


function showModalChangeImage(id_portada) {

    $('#id_portada').val(id_portada);
    $('#modalChangeImage').modal("show");
}
function showModalChangeImageInfra(id_portada) {

    $('#id_portada').val(id_portada);
    $('#modalChangeImage').modal("show");
}

function changeImage() {
    var form = $('form#frmChangeImage')[0];
    var data = new FormData(form);

    $('#loader-icon').show();

    $.ajax({
        url: $sitio + '/model/cover/changeImage.php',
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

function changeImageInfra() {
    var form = $('form#frmChangeImageInfra')[0];
    var data = new FormData(form);

    $('#loader-icon').show();

    $.ajax({
        url: $sitio + '/model/projects/changeImage.php',
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