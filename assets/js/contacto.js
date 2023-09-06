//$sitio = "/patronato"
$sitio = ""
var $contactid;
$(function () {

    //VISTA DE ADMIN
    $.ajax({
        url:$sitio + '/model/contact/getContact.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){

        if(json.code===200)
            $.each(json.msg, function(i,row){
                showContactInfo(row['id_contacto'],row['domicilio'],row['telefono'],row['email'],row['codigo_postal']);
            });
    });

    $('#btnGuardarContacto').on('click', function () {
        updateContact();
    });


    //VISTA DE USUARIO GENERAL
    $('#frmContact').validate({
        rules:{

            name:{
                required: true
            },
            email: {
                required: true
            },
            message: {
                required: true
            }
        },
        messages:{

            name: {
                required: "Capture el nombre de contacto"
            },
            email: {
                required: "Capture un email de contacto"
            },
            message: {
                required: "Capture un mansaje"
            }

        },
        highlight: function (element){
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element){
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element){
            if(element.parent('.input-group').length){
                error.insertAfter(element.parent());
            }else{
                error.insertAfter(element);
            }
        },
        submitHandler: function(form){
            sendMessage();
            return false;
        }
    });
});


function showContactInfo(contactid,address,phone,email,cp){
    $contactid = contactid;
    $('#adminAddress').val(address);
    $('#adminPhone').val(phone);
    $('#adminEmail').val(email);
    $('#adminCP').val(cp);

}

function updateContact(){
    $.ajax(
        {
            url: $sitio + '/model/contact/updateContact.php' ,
            type: "post",
            data: {
                contactid: $contactid,
                extension: $('#adminExtension').val(),
                email: $('#adminEmail').val(),
                phone: $('#adminPhone').val(),
                zipcode: $('#adminCP').val(),
                address: $('#adminAddress').val()
            }
        }
    ).done(
        function (data) {
            console.log("Codigo "+data.code);
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