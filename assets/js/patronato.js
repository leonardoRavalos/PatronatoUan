//$sitio = "/patronato";
$sitio = "";

$(function () {
    tinymce.init({
        selector: "#contenido",
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
    setTimeout(function () {

        $.ajax({
            url: $sitio + '/model/patronato/getPatronatoByID.php',
            type: 'GET',
            dataType: 'json'
        }).done(function (json) {

            if (json.code === 200)
                $.each(json.msg, function (i, row) {
                    showPatronato(row['id_patronato'], row['contenido']);
                    $('#imgPat').attr("src","../uploads/images/" + row['imagen']);
                });
        });


    }, 100);

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


    $('#btnGuardar').on('click', function () {

        updatePatronato();

    });

    $('#btnChangeImage').on('click', function () {

        showModalChangeImage();

    });
    $('#btnChangeImage2').on('click', function () {

        $('#frmChangeImage').submit();

    });
    $

});// fin Function

function showPatronato(id_patronato, contenido) {

    $id_patronato = id_patronato;
    tinyMCE.activeEditor.setContent(contenido);
}

function showModalChangeImage() {
    $('#id_patronato').val(1);
    $('#modalChangeImage').modal("show");
}

function updatePatronato() {
    $contenido = tinyMCE.activeEditor.getContent();


    $.ajax(
        {
            url: $sitio + '/model/patronato/updatePatronato.php',
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

function changeImage() {
    var form = $('form#frmChangeImage')[0];
    var data = new FormData(form);

    $('#loader-icon').show();

    $.ajax({
        url: $sitio + '/model/patronato/changeImage.php',
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