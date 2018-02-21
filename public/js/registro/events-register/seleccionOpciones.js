function selectUser() {
    var porId = document.getElementById("tipoUsuario").value;
    //console.log("porId: " + porId);

    limpiarCombosRegistrar();

    if (porId == 1) { //CNA
        $("#error-sexo").addClass("ocultar-mensaje-error");
        $("#error-privilegios").addClass("ocultar-mensaje-error");

        $("#divPrivilegios").removeClass("ocultar-mensaje-error");
        $("#divSexo").removeClass("ocultar-mensaje-error");
        $("#divDisciplina").addClass("ocultar-mensaje-error");
        $("#divComision").addClass("ocultar-mensaje-error");
        $("#divTipoArbitro").addClass("ocultar-mensaje-error");
        $("#divClasificacion").addClass("ocultar-mensaje-error");

    } else if (porId == 2) { //Comision
        $("#divSexo").addClass("ocultar-mensaje-error");
        $("#divPrivilegios").addClass("ocultar-mensaje-error");
        $("#divDisciplina").addClass("ocultar-mensaje-error");
        $("#divTipoArbitro").addClass("ocultar-mensaje-error");
        $("#divClasificacion").addClass("ocultar-mensaje-error");

       $("#divComision").removeClass("ocultar-mensaje-error");
       $("#error-comision").addClass("ocultar-mensaje-error");


    } else if (porId == 3) { //Arbitro
        $("#error-numero-cuenta").addClass("ocultar-mensaje-error");
        $("#error-sexo").addClass("ocultar-mensaje-error");
        $("#error-disciplina").addClass("ocultar-mensaje-error");
        $("#error-comision").addClass("ocultar-mensaje-error");
        $("#error-tipoArbitro").addClass("ocultar-mensaje-error");
        $("#error-clasificacion").addClass("ocultar-mensaje-error");

        $("#divPrivilegios").addClass("ocultar-mensaje-error");
        $("#divSexo").removeClass("ocultar-mensaje-error");
        $("#divDisciplina").removeClass("ocultar-mensaje-error");
        $("#divComision").removeClass("ocultar-mensaje-error");
        $("#divTipoArbitro").removeClass("ocultar-mensaje-error");
        $("#divClasificacion").removeClass("ocultar-mensaje-error");
        $("#divNumeroCuenta").removeClass("ocultar-mensaje-error");
    } else if (porId == 4) { //Asesor
        $("#error-numero-cuenta").addClass("ocultar-mensaje-error");
        $("#error-sexo").addClass("ocultar-mensaje-error");
        $("#error-disciplina").addClass("ocultar-mensaje-error");
        $("#error-comision").addClass("ocultar-mensaje-error");

        $("#divPrivilegios").addClass("ocultar-mensaje-error");
        $("#divSexo").removeClass("ocultar-mensaje-error");
        $("#divDisciplina").removeClass("ocultar-mensaje-error");
        $("#divComision").removeClass("ocultar-mensaje-error");
        $("#divTipoArbitro").addClass("ocultar-mensaje-error");
        $("#divClasificacion").addClass("ocultar-mensaje-error");
        $("#divNumeroCuenta").removeClass("ocultar-mensaje-error");
    } else if (porId == 5) { //Preparador Fisico
        $("#error-numero-cuenta").addClass("ocultar-mensaje-error");
        $("#error-sexo").addClass("ocultar-mensaje-error");
        $("#error-disciplina").addClass("ocultar-mensaje-error");
        $("#error-comision").addClass("ocultar-mensaje-error");

        $("#divDisciplina").addClass("ocultar-mensaje-error");
        $("#divPrivilegios").addClass("ocultar-mensaje-error");
        $("#divSexo").removeClass("ocultar-mensaje-error");
        $("#divComision").removeClass("ocultar-mensaje-error");
        $("#divTipoArbitro").addClass("ocultar-mensaje-error");
        $("#divClasificacion").addClass("ocultar-mensaje-error");
        $("#divNumeroCuenta").removeClass("ocultar-mensaje-error");
    } else { //No se ha seleccionado el tipo de usuario
        $("#divPrivilegios").addClass("ocultar-mensaje-error");
        $("#divSexo").removeClass("ocultar-mensaje-error");
        $("#divDisciplina").addClass("ocultar-mensaje-error");
        $("#divComision").addClass("ocultar-mensaje-error");
        $("#divTipoArbitro").addClass("ocultar-mensaje-error");
        $("#divClasificacion").addClass("ocultar-mensaje-error");
        $("#divSexo").removeClass("ocultar-mensaje-error");
        $("#divNumeroCuenta").removeClass("ocultar-mensaje-error");
    }
}

function limpiarCombosRegistrar() {
    formRegister.sexo.options[0].selected = true;
    formRegister.disciplina.options[0].selected = true;
    formRegister.comision.options[0].selected = true;
    formRegister.tipoArbitro.options[0].selected = true;
    formRegister.clasificacion.options[0].selected = true;
    for (i = 0; i < document.formRegister.elements.length; i++) {
        if (document.formRegister.elements[i].type == "checkbox") {
            document.formRegister.elements[i].checked = 0;
        }
    }
}

function selectIdentificacion() {
    var porId = document.getElementById("identificacion").value;
    if (porId == 'P') {
        $("#numeroId").val('');
        $("#numeroId").get(0).type = 'text';
    } else {
        $("#numeroId").val('');
        $("#numeroId").get(0).type = 'number';
    }
}

// END seleccionOpciones.js
