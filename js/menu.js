$(document).ready(function(){

    $('#menu').css({"display":"none"});
    $('#boton_menu').on('click',function(){
        $('#menu').css({"opacity":"1"});
        $('#menu').slideToggle(1000);
    });
    
    $('#buscarButoon').on('click',function(){
        $('#datos').hide();
        $('#buscador').slideDown(1000);
        $('#datos form img').delay(1000).hide(1000);
        
    });

    $('#quitar_obsiones').on('click',function(){
        $('#cargador_degrafico').hide(1000);
    });

    $('#efecto_reporte').on('click',function(){
        $('.otros').slideToggle();
        $('.sub_grafico').slideToggle(1000);
        
    });

    
});