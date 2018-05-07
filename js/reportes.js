$(document).ready(function(){

    $('#agregartexto').on('click',function(){
      
       $('#parrafos').append('<p>'+ $('#cargador_de_texto').val() + '</p>'); 
       $('#cargador_de_texto').val('');
    });

    $('#agregartitulo').on('click',function(){
      
        $('#parrafos').append('<h2>'+ $('#cargador_de_texto').val() + '</h2>'); 
        $('#cargador_de_texto').val('');
     });
});
