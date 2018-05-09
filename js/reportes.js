$(document).ready(function(){

    $('#agregartexto').on('click',function(){
      
       $('#parrafos').append('<p>'+ $('#cargador_de_texto').val() + '</p>'); 
       $('#cargador_de_texto').val('');
    });

    $('#agregartitulo').on('click',function(){
      
        $('#parrafos').append('<h2>'+ $('#cargador_de_texto').val() + '</h2>'); 
        $('#cargador_de_texto').val('');
     });


     $('#obtener').on('click',function(){
      
        $("header").hide();
        $("textarea").hide();
        $("#botonesReporte").hide();

        window.print();

        $("header").show();
        $("textarea").show();
        $("#botonesReporte").show();

   
     });


});
