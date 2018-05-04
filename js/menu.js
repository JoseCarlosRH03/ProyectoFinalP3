$(document).ready(function(){

    $('#menu').css({"display":"none"});
    $('#boton_menu').on('click',function(){
        $('#menu').css({"opacity":"1"});
        $('#menu').slideToggle(1000);
    });

});