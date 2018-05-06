$(document).ready(function(){
var id=1;
var gestor = $('#a0');
var largo = 470;
$("#Agregar_grafico").on('click',function(e){
    $('#cuerpo').css({ "height": (largo+470)+"px"});
    $('#area').append(gestor.html());

});


});