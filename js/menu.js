$(document).ready(function(){

    $('#menu').css({"display":"none"});
    $('#boton_menu').on('click',function(){
        $('#menu').css({"opacity":"1"});
        $('#menu').slideToggle(1000);
    });
    
    $('#cuerpo').on('click',function(){
        $('#menu').css({"opacity":"1"});
        $('#menu').slideUp(1000);
    });
    
    $('#buscarButoon').on('click',function(){
        $('#datos').hide();
        $('#buscador').slideDown(1000);
        $('#datos form img').delay(1000).hide(1000);
        
    });

    $('#inputbutton').on('click',function(){
        $('#buscador').hide();
        $('#datos').slideDown(1000);
        $('#datos form img').delay(1000).show(1000);
    });
});