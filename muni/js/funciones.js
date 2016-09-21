$(document).ready(function () {
    $("#conectar").button().click(function () {
        conectar();
    });
//    $("#cerrarSesion").button().click(function () {
//        cerrarSesion();
//    });

//    $("#ingresarusuario").button().click(function() {
//        ingresarusuario();
//    });
//    $("#nuevacategoria").button().click(function() {
//        ingresarcategoria();
//    });
//    $("#modificarcategoria").button().click(function() {
//        modificarcategoria();
//    });
//    
//    
//    $("#areacliente").tabs();
//    $("#areaadministrador").tabs();
//    $("#areatecnico").tabs();
//    verifaLogin();

    $("#dialog").dialog({width: 400, autoOpen: false});
    $("#login").click(function () {
        $("#dialog").dialog("open");
    });
    $("#loginm").click(function () {
        $("#dialog").dialog("open");
    });

    verifaLogin();



});

function opcionvideo() {

    document.getElementById('ifoto').hidden = true;
    document.getElementById('ivideo').hidden = false;

}
function opcionimagen() {

    document.getElementById('ifoto').hidden = false;
    document.getElementById('ivideo').hidden = true;

}


function verifaLogin() {
    $.post(
            base_url + "welcome/verifaLogin",
            {},
            function (datos) {

                if (datos.valor == 0) {
                    $("#stream").show();
                    $("#contenido").hide();
                } else {


                    if (datos.permiso == 1) {
                        $("#contenido").show();
                        $("#stream").hide();
                        cargacpanel();
                    }
                }
            }, 'json'
            );
}
function conectar() {

    var correo = $("#correo").val();
    var clave = $("#clave").val();

    if (correo !== "" && clave !== "") {
        $.post(
                base_url + "welcome/conectar",
                {
                    correo: correo,
                    clave: clave
                },
                function (datos) {

                    if (datos.valor == 0) {

                        $("#stream").show();
                        $("#contenido").hide();
                        alertify.error("Acceso Denegado");
                    } else {

                        $("#dialog").dialog("close");

                        if (datos.permiso == 1) {
                            $("#contenido").show();
                            $("#stream").hide();

                        }
                        verifaLogin();
                    }
                }, 'json'
                );

    } else {

        alertify.error("Revise Usuario y Contraseña");
    }

}

function cargacpanel() {
    $.post(
            base_url + "welcome/cargacpanel",
            {},
            function (ruta, datos) {
                $("#contenido").hide();
                $("#contenido").html(ruta, datos);
                $("#contenido").show('fast');
            });
}


function cerrarSesion() {
    $.post(base_url + "welcome/cerrar",
            {
            }, function () {

        verifaLogin();
        alertify.success("Session Cerrada Correctamente");
    });
}
function verifaLogin2() {
    $.post(
            base_url + "welcome/verifaLogin",
            {},
            function (datos) {

                if (datos.valor == 0) {
                    $("#stream").show();
                    $("#contenido").hide();
                } else {

                    if (datos.permiso == 1) {

                        $("#stream").hide();
                        $("#contenido").show();
                    }
                }
            }, 'json'
            );
}

function ingresarnoticia() {

    var titulo = $("#txttituloo").val();
    var encabezado = $("#txtencabezado").val();
    var texto = $("#txttexto").val();
    var bibliografia = $("#txtbibliografia").val();
    var autor = $("#txtautor").val();
    var ivideo = $("#ivideo").val();
    var chek = document.getElementById('rvideo');
    var archivos = document.getElementById('file').files;
   


    if (titulo == '' || encabezado == '' || texto == '' || bibliografia == '' || autor == '') {
        alertify.error("Revise los campos! Minimo 3 caracteres");
    } else {

        $.post(
                base_url + "welcome/ingresarnoticia",
                {
                    titulo: titulo,
                    encabezado: encabezado,
                    texto: texto,
                    bibliografia: bibliografia,
                    autor: autor,
                    ivideo: ivideo,
                    archivos: archivos

                },
                function (valor) {
                    if (valor.valor == 1) {
                        alertify.success("Noticia Ingresada correctamente");
                        $("#txttituloo").val("");
                        $("#txtencabezado").val("");
                        $("#txttexto").val("");
                        $("#txtbibliografia").val("");
                        $("#txtautor").val("");
                    } else {
                        if (valor.valor == 2) {
                            alertify.error("ERROR en el ingreso de la noticia!");
                        } else {
                            alertify.success("ok")
                        }

                    }
                }, 'json');

    }


}
function EVAL(id_solicitud) {
    alert(id_solicitud);
    var s5 = document.getElementById("puntaje" + id_solicitud).value;


    $.post(
            base_url + "welcome/evaluar",
            {
                id: id_solicitud,
                puntaje: s5
            },
            function (valor) {
                if (valor.valor == 1) {
                    alertify.error("Datos Farridos Verifique!");
                } else {
                    alertify.success("EVALUACION ENVIADA CORRECTAMENTE");
                    reportecliente();
                    $("#dialog3" + id_solicitud).dialog("close");
                }
            }, 'json');
}
function guardarcambios() {

    var codig = $("#oculto").val();
    var comentariotecnico = $("#ComentarioTecnico").val();
    var fecha = $("#datepicker").val();

    if (comentariotecnico.length < 5 || comentariotecnico == '') {
        alertify.error("Ingrese comentario!");
    } else {
        $.post(
                base_url + "welcome/guardarcambios",
                {
                    id_solicitud: codig,
                    fecha: fecha,
                    comentariotecnico: comentariotecnico
                },
                function (valor) {
                    if (valor.valor == 1) {
                        alertify.error("Datos Fallidos Verifique!");
                    } else {
                        alertify.success("Datos guardados Correctamente");
                        $("#ComentarioTecnico").val("");
                        $("#dialog").dialog("close");
                    }
                }, 'json');
    }
}
function Terminar() {

    var codigo = $("#oculto").val();
    var coment = $("#ComentarioTecnico").val();
    if (coment.length == 0) {
        alertify.error("Antes de Terminar Con la Solicitud Debe Dejar una " + 'Aclaracion' + "");
    } else {
        alertify.confirm("<p>Seguro que desea terminar con la Solicitud?.<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
            if (e) {
                $.post(base_url + "welcome/Terminar", {
                    codigo: codigo
                }, function () {
                    alertify.success("Solicitud Terminada con Exito");
                }, 'json');
                $("#dialog").dialog("close");
                verifaLogin();
            } else {
                alertify.error("Solicitud aun en proceso");
            }
        });
    }
    return false;

}
function derivar(id_solicitud) {

    var s4 = document.getElementById("selectee" + id_solicitud).value;
    var s4 = document.getElementById("selectee" + id_solicitud).value;

    $.post(
            base_url + "welcome/derivar",
            {
                id_solicitud: id_solicitud,
                id_tecnico: s4
            },
            function (valor) {
                if (valor.valor == 1) {
                    alertify.error("Solicitud no puede ser Derivada!");

                } else {
                    alertify.success("Solicitud derivada Exitosamente");
                    reporte();
                }
            }, 'json'
            );
}
function eliminar(id_solicitud) {
    alertify.confirm("<p>Seguro que desea Eliminar  la Solicitud?.<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
        if (e) {
            $.post(base_url + "welcome/eliminar", {
                id_solicitud: id_solicitud
            }, function () {
                alertify.success("Solicitud Eliminada con Exito");
            }, 'json');

            verifaLogin();
        } else {
            alertify.error("Eliminacion cancelada " + " AUN EN PROCESO" + "");
        }
    });
}
function ingresosolicitud() {
    var categoria = $("#categorias").val();
    var comentario = $("#comentarios").val();


    if (comentario.length < 5 || comentario == "") {
        alertify.error("Revise los campos!");

    } else {
        $.post(
                base_url + "welcome/ingresosolicitud",
                {
                    categoria: categoria,
                    comentario: comentario
                },
                function (valor) {
                    if (valor.valor == 1) {
                        alertify.error("Datos fallidos ¡verifique!");

                    } else {
                        alertify.success("Datos Ingresados correctamente");
                        $("#comentarios").val("");
                        reportecliente();
                        enviarcorreo();
                    }
                }, 'json'
                );
    }
}
function ingresarcategoria() {
    var newcategoria = $("#newcategoria").val();
    var categorianueva = newcategoria.toUpperCase();

    if (categorianueva.length < 3 || categorianueva == "") {

        alertify.error("Revise el campos, minimo 3 caracteres");
    } else {
        $.post(
                base_url + "welcome/ingresarcategoria",
                {
                    categorianueva: categorianueva
                },
                function (valor) {
                    if (valor.valor == 1) {
                        alertify.error("La Categoria Ya existe!");
                    } else {
                        alertify.success("categoria ingresada correctamente");
                        $("#newcategoria").val("");
                        cargarCategorias2();
                    }
                }, 'json'
                );
    }
}
function modificarcategoria() {
    var newcategoria = $("#newcategoria").val();
    var categorianueva = newcategoria.toUpperCase();
    var actual = document.getElementById('reportecategorias').value;

    alertify.confirm("<p>¿Seguro que deseas modificar la categoria?.<br>\n\
Tenga en cuenta que se modificaran todas las categorias asociadas a la actual<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
        if (e) {
            if (categorianueva.length < 3 || categorianueva == "") {

                alertify.error("Revise el campos, minimo 3 caracteres");
            } else {
                $.post(
                        base_url + "welcome/modificarcategoria",
                        {
                            categorianueva: categorianueva,
                            actual: actual
                        },
                        function (valor) {
                            if (valor.valor == 1) {
                                alertify.error("La Categoria Ya existe!");
                            } else {
                                alertify.success("Categoria MODIFICADA correctamente");
                                $("#newcategoria").val("");
                                cargarCategorias2();
                            }
                        }, 'json'
                        );
            }

        } else {
            alertify.error("Categoria Actual No Modificada");
            $("#newcategoria").val("");
        }
    });


}
function cargarCategorias() {
    $.post(
            base_url + "welcome/cargarCategorias",
            {},
            function (ruta, datos) {
                $("#categorias").html(ruta, datos);
            });
}
function cargarCategorias2() {
    $.post(
            base_url + "welcome/cargarCategorias2",
            {},
            function (ruta, datos) {
                $("#reportecategorias").html(ruta, datos);
            });
}
function reportecliente() {
    $.post(
            base_url + "welcome/reportecliente",
            {},
            function (ruta, datos) {
                $("#CargaSolicitudesCliente").hide();
                $("#CargaSolicitudesCliente").html(ruta, datos);
                $("#CargaSolicitudesCliente").show('fast');
            });


}

function reportetecnico() {
    $.post(
            base_url + "welcome/reportetecnico",
            {},
            function (ruta, datos) {
                $("#reporte3").hide();
                $("#reporte3").html(ruta, datos);
                $("#reporte3").show('fast');
            });
}
function enviarcorreo() {

    $.post(
            base_url + "welcome/enviarcorreo",
            {},
            function (datos) {
                if (datos.valor == 1) {

                } else {

                }
            }
    );
}