//$sitio = "/patronato"
$sitio = ""
$(function () {

    $('#frmCategoria').validate({
        rules: {

            nombreCategoria: {
                minlength: 3,
                required: true
            }
        },
        messages: {

            nombreCategoria: {
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
            newCategory();
            return false;
        }
    });


    $('#frmEditCategory').validate({
        rules: {
            nombreCategoria2: {
                minlength: 3,

                required: true
            }
        },
        messages: {
            nombreCategoria2: {
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
            updateCategory();
            return false;
        }
    });


    $('#btnModificar').on('click', function () {

        $('#frmEditCategory').submit();

    });


    $('#tbCategoria').DataTable({
        responsive: true,
        language: {
            url: "http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax: {
            url: $sitio + '/model/categories/getCategories.php',
            dataSrc: function (json) {

                return json['msg'];
            }
        },
        columns: [
            {
                data: "id_categoria"
            },
            {
                data: "nombre"
            },
            {
                data: function (row) {
                    str = "<div align='center' >";
                    str += "<button id='btnEditar' class='btn btn-success' onClick='showCategory(" + row['id_categoria'] + ",\"" + row['nombre'] + "\")'><i class=\"glyphicon glyphicon-edit\"></i> Editar</button>";
                    str += "&nbsp;<button id='btnBorrar' class='btn btn-danger' onClick='deleteCategory(" + row['id_categoria'] + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";//trash
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

function showCategory(categoryid, nombrecategory) {
    $('#categoryid').val(categoryid);
    $('#nombreCategoria2').val(nombrecategory);
    $('#modalCategory').modal("show");

}

function newCategory() {

    $.ajax({
        url: $sitio + '/model/categories/newCategory.php',
        type: "post",
        data: {
            nombre: $('#nombreCategoria').val()
        }
    }).done(
        function (data) {
            if (data.code === 200) {
                swal({
                        title: "Guardado",
                        text: data.msg,
                        type: "success"
                    },
                    function () {
                        $('#tbCategoria').dataTable().api().ajax.reload();
                        $('#nombreCategoria').val('');
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
                text: "No hay mensaje que mostrar",
                type: "error"
            });
        }
    );
}

function updateCategory() {

    $.ajax(
        {
            url: $sitio + '/model/categories/updateCategory.php',
            type: "post",
            data: {
                id_categoria: $('#categoryid').val(),
                nombre: $('#nombreCategoria2').val()
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
                        $('#tbCategoria').dataTable().api().ajax.reload();
                        $('#modalCategory').modal("toggle");
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

function deleteCategory(categoryid) {

    swal(
        {
            title: "¿Estas seguro que deseas eliminar este registro?", text: "",
            type: "warning", showCancelButton: true,
            confirmButtonColor: "#DD6B55", confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar", closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                ///Comienza a Borrar
                $.ajax(
                    {
                        url: $sitio + '/model/categories/deleteCategory.php',
                        type: "post",
                        data: {id_categoria: categoryid}
                    }
                ).done(
                    function (data) {
                        //alert("Se realizó correctamente "+data.code);
                        if (data.code == 200) {


                            swal("Eliminado", "El registro se elimino correctamente", "success");
                            $('#tbCategoria').dataTable().api().ajax.reload();
                            $('#categoryid').val('');
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
                            text: "El servidor no está disponible :(",
                            type: "error"
                        });
                    }
                );
            } else {
                swal("Cancelado", "Accion Cancelada", "error");
            }
        });

}


