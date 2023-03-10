// MENSAJE
function alerta(evento) {
    if (confirm('¿Estas seguro de eliminar?')) {
        return true;
    } else {
        evento.preventDefault();
    }
}

// GUARDAR TODOS LOS ELEMENTOS CON LA MISMA CLASE ".btnEliminar"
var mensaje = document.querySelectorAll('.btnEliminar');

// RECORRER Y VALIDAR PARA TODOS LOS ELEMENTOS DE LA MISMA CLASE
for (var i = 0; i < mensaje.length; i++) {

    mensaje[i].addEventListener('click', alerta);

}