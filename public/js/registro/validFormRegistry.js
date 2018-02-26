$(document).ready(function() {
    $("#cedula").click(function() {
        limpiar_cedula();
    });

    $("#telefono").click(function() {
        limpiar_telefono();
    });

    $("#email").click(function() {
        limpiar_email();
    });

    $("#direccion").click(function() {
        limpiar_direccion();
    });

    $("#profesion").click(function() {
        limpiar_profesion();
    });
    $("#cedula2").click(function() {
        limpiar_cedula2();
    });
    
    $(":input").inputmask();

  $("#cedula").blur(function() {
        consultar_cedula(document.formRegister.cedula.value,'cedula');
    });

    $("#cedula2").blur(function() {
        consultar_cedula(document.formRegister.cedula2.value,'registrado');
    });
     $("#formRegister").on('submit', function(evt){
        evt.preventDefault();  
    // tu codigo aqui
 //});
    //$("#btnRegistrar").clik(function() {
        $body = $("body");
        $(document).on({
            ajaxStart: function() {
                $body.addClass("loading");
            },
            ajaxStop: function() {
                $body.removeClass("loading");
            }
        });

        var datosobligatorios = verificarDatosObligatorios();
       

        if (datosobligatorios  && verificarOpcionales()) {

            $('#modal-verificar').modal('show');

            
        }
    });

     $("#confirmarForm").on('submit', function(evt){
        evt.preventDefault();  

        $body = $("body");
        $(document).on({
            ajaxStart: function() {
                $body.addClass("loading");
            },
            ajaxStop: function() {
                $body.removeClass("loading");
            }
        });

        var telefono = document.formRegister.telefono.value;
        var confirmar=document.confirmarForm.confirmacion.value;
        var valor= telefono.substr(telefono.length-3, 3);
        if(confirmar==valor){
            document.confirmarForm.confirmacion.value="";
            serializarDatosRegistros();

            $('#modal-verificar').modal('hide');

        }else{
            alert('Código de verificación errado');
            $('#confirmar').text('');
        }   
    });

});


function verificarDatosObligatorios() {
    var cedula = document.formRegister.cedula.value;
    var telefono = document.formRegister.telefono.value;
    
    
    var valores=cedula.split('');
        var ncedula="";
        for (var i = 0; i < valores.length; i++) {
            if(ValidaNumeros(valores[i])){
                ncedula+=valores[i];    
            }
        }

    var valores=telefono.split('');
        var ntelefono="";
        for (var i = 0; i < valores.length; i++) {
            if(ValidaNumeros(valores[i])){
                ntelefono+=valores[i];    
            }
        }
    limpiarFormulario();

    var flag = true;
    
    //-CEDULA-----------------------------------------------------------------------------------/
    if (cedula == "" || cedula == undefined || cedula == " " || cedula == null) {
        $("#error-cedula").text("El campo cédula no puede estar vacío");
        $("#error-cedula").removeClass("ocultar-mensaje-error");
        flag = false;
    } else if (ncedula.length < 11) {
        $("#error-cedula").text("El campo cédula debe contener al menos 11 caracteres");
        $("#error-cedula").removeClass("ocultar-mensaje-error");
        flag = false;
    }
    //-USUARIO-----------------------------------------------------------------------------------/
    if (telefono == "" || telefono == undefined || telefono == " " || telefono == null) {
        $("#error-telefono").text("El campo teléfono no puede estar vacío");
        $("#error-telefono").removeClass("ocultar-mensaje-error");
        flag = false;
    } else if (ntelefono.length < 10) {
        $("#error-telefono").text("El campo teléfono debe contener al menos 11 caracteres");
        $("#error-telefono").removeClass("ocultar-mensaje-error");
        flag = false;
    }
    
    return flag;
}

function verificarOpcionales() {
    var email = document.formRegister.email.value;
    /**var div=telefono.split("");
    var count=0;
    for(var i=0; i<telefono.length; i++){
        if(ValidaNumeros(div[i])){
            count++;
        }
    }
    

    if (((telefono)) && (count < 10) ) {
        $("#error-telefono").text("El campo Teléfono debe contener 10 dígitos");
        $("#error-telefono").removeClass("ocultar-mensaje-error");
        flag = false;
    }
    */
    var flag = true;
    //-USUARIO-----------------------------------------------------------------------------------/
    if (((email)) && (ValidaEmail(email) == false)) {
        $("#error-email").text("Debe introducir un formato de correo válido para el campo");
        $("#error-email").removeClass("ocultar-mensaje-error");
        flag = false;
    } 

    return flag;

}

function ValidaEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function ValidaCaracteres(texto) {
    return /^[a-zA-Z," ",áéíóúñÑ]+$/i.test(texto);
}

function ValidaNumeros(numeros) {
    return /^[0-9]+$/i.test(numeros);
}

function ValidaBoolean(bool) {
    if (bool) {
        return 1;
    } else {
        return 0;
    }
}

function serializarDatosRegistros() {

    var cedula = document.formRegister.cedula.value;
    var telefono = document.formRegister.telefono.value;
    var email = document.formRegister.email.value;
    var direccion = document.formRegister.direccion.value;
    var profesion = document.formRegister.profesion.value;
    var cedula2 = document.formRegister.cedula2.value;
    //muestro el navegador 
    

    var valores=cedula.split('');
        var ncedula="";
        for (var i = 0; i < valores.length; i++) {
            if(ValidaNumeros(valores[i])){
                ncedula+=valores[i];    
            }
        }

    var valores=cedula2.split('');
        var ncedula2="";
        for (var i = 0; i < valores.length; i++) {
            if(ValidaNumeros(valores[i])){
                ncedula2+=valores[i];    
            }
        }
    var valores=telefono.split('');
        var ntelefono="";
        for (var i = 0; i < valores.length; i++) {
            if(ValidaNumeros(valores[i])){
                ntelefono+=valores[i];    
            }
        }
    if (profesion == "-") {
        var profesion = "";
    }

    while(ncedula.length<11){
        ncedula="0"+ncedula;
    }
    console.log(ncedula);

    while(ncedula12.length<11){
        ncedula2="0"+ncedula2;
    }
    console.log(ncedula2);
    var data={
        'cedula': ncedula,
        'telefono':ntelefono,
        'email':email,
        'direccion':direccion,
        'profesion': profesion,
        'cedula2': ncedula2,
        'navegador':getBrowser(),
        'os':navigator.appVersion,
        'version':navigator.platform
    }
    //-------------------------------------------------------------------------------------
    console.log(JSON.stringify(data));

    $.ajax({
                headers: {
                          'X-CSRF-TOKEN': document.formRegister._token.value
                      },
                data: data,
                url: '/inscripcion',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded'
            }).done(function(response) {
                console.log(JSON.parse(JSON.stringify(response)));
                if (response.status == 1111) {
                    $("#error-cedula").text("La cédula no existe en nuestros registros");
                    $("#error-cedula").removeClass("ocultar-mensaje-error");
                    $("#nombre_usuario").text("");
                    window.location.hash = "#cedula";
                }

                if (response.status == 2222) {
                    $("#error-cedula2").text("La cédula no existe en nuestros registros");
                    $("#error-cedula2").removeClass("ocultar-mensaje-error");
                    $("#nombre_usuario2").text("");
                    window.location.hash = "#cedula2";
                }

                if (response.status == "OK") {
                    limpiarFormulario();
                    document.formRegister.cedula.value='';
                    document.formRegister.telefono.value='';
                    document.formRegister.email.value='';
                    document.formRegister.direccion.value='';
                    document.formRegister.profesion.value='-';
                    document.formRegister.cedula2.value='';
                    $("#nombre_usuario").text("");
                    $("#nombre_usuario2").text("");
                    alert("Usuario Registrado.");
                }
                
            }).fail(function(error) {
               console.log(JSON.parse(JSON.stringify(error)));
                /**
                $("#error-general").text("Ha ocurrido un error, por favor intente más tarde.");
                $("#error-general").removeClass("ocultar-mensaje-error");
                */
            });

}

function limpiarFormulario() {
    limpiar_cedula();
    limpiar_telefono();
    limpiar_email();
    limpiar_direccion();
    limpiar_profesion();
    limpiar_cedula2();
}


function limpiar_cedula() {
    $("#error-cedula").addClass("ocultar-mensaje-error");
}

function limpiar_telefono() {
    $("#error-telefono").addClass("ocultar-mensaje-error");
}

function limpiar_email() {
    $("#error-email").addClass("ocultar-mensaje-error");
}

function limpiar_direccion() {
    $("#error-direccion").addClass("ocultar-mensaje-error");
}

function limpiar_profesion() {
    $("#error-profesion").addClass("ocultar-mensaje-error");
}

function limpiar_cedula2() {
    $("#error-correo").addClass("ocultar-mensaje-error");
}

function consultar_cedula(cedula, identificador){

    if((cedula)){
        limpiarFormulario();
        var valores=cedula.split('');
        var ncedula="";
        for (var i = 0; i < valores.length; i++) {
            if(ValidaNumeros(valores[i])){
                ncedula+=valores[i];    
            }
        }

        while(ncedula.length<11){
            ncedula="0"+ncedula;
        }
        console.log(ncedula);
        var data={
            'cedula': ncedula    
        }
        //-------------------------------------------------------------------------------------
        

        $.ajax({
            headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            data: data,
            url: 'datapadron',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded'
            }).done(function(response) {
                    
                    if (response.status == 2222) {
                        if (identificador=='cedula'){
                            $("#error-cedula").text("La cédula no existe en nuestros registros");
                            $("#error-cedula").removeClass("ocultar-mensaje-error");
                            $("#nombre_usuario").text("");
                            window.location.hash = "#cedula";

                        }else{
                            $("#error-cedula2").text("La cédula no existe en nuestros registros");
                            $("#error-cedula2").removeClass("ocultar-mensaje-error");
                            $("#nombre_usuario2").text("");
                            window.location.hash = "#cedula2";                            
                        }
                        
                        
                    }
                    if (response.status == "OK") {
                        if (identificador=='cedula'){
                            $("#nombre_usuario").text(response.nombre);
                            $("#error-cedula").text("");
                            $("#error-cedula").addClass("ocultar-mensaje-error");
                        }else{
                            $("#nombre_usuario2").text(response.nombre);
                            $("#error-cedula2").text("");
                            $("#error-cedula2").addClass("ocultar-mensaje-error");
                        }
                    }
                    
                }).fail(function(error) {
                    console.log(error);
                    /**
                    $("#error-general").text("Ha ocurrido un error, por favor intente más tarde.");
                    $("#error-general").removeClass("ocultar-mensaje-error");
                    */
                });
    }else{

        if(identificador=="cedula"){
            $("#error-cedula").text("No puede dejar el campo vacío");
            $("#error-cedula").removeClass("ocultar-mensaje-error");
            $("#nombre_usuario").text("");
            window.location.hash = "#cedula";
        }else{
            $("#error-cedula2").text("No puede dejar el campo vacío");
            $("#error-cedula2").removeClass("ocultar-mensaje-error");
            $("#nombre_usuario2").text("");
            window.location.hash = "#cedula2";
        }
    }
        
}

function getBrowser() {
    var ua= navigator.userAgent, tem, 
    M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
    if(/trident/i.test(M[1])){
        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
        return 'IE '+(tem[1] || '');
    }
    if(M[1]=== 'Chrome'){
        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
    }
    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
    return M.join(' ');
}

