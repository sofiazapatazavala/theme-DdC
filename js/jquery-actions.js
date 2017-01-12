$(function() {
    // Transforma en botón los elementos para editar entradas
    $(".more-link").addClass("btn btn-block btn-secondary my-3");
    $(".post-edit-link").addClass("btn btn-block btn-warning my-3");
    $(".type-ddc_documentos .content a:first-child").addClass("btn btn-block btn-primary");
    // Si se usa opción de imagen de equipo, activar
    /*
    $("img.img-equipo").mouseenter(function() {
        $(this).css('display','none'); $(this).next().css('display','block');
    } );
    $("img.img-equipo-hover").mouseleave(function() {
        $(this).css('display','none'); $(this).prev().css('display','block');
    } );
    $(".equipo-content p").addClass("small");
    */

} );
