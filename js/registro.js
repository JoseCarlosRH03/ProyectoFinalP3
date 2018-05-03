$(document).ready(function(){

    var control = 0;
$('#boton1').on('click',function(){
  if(control >0){
    $('.boton').attr("disabled", true);
  }else{
    $('.boton').attr("disabled", false);
    $('#persona').hide();
    $('#vehiculo').fadeIn(1000);
    $('#a2').css({
        "color":"black",
        "background":"white" 
    })
    $( "<style> #a2:before { border-left:10px solid  white; }</style>" ).appendTo( "#a2" );
    valor = 0;
  }
});

$('#boton2').on('click',function(){
    $('#vehiculo').hide();
    $('#persona').fadeIn(1000);
    $('#a2').css({
        "color":"white",
        "background":"#0F218D" 
    })
    $( "<style> #a2:before { border-left:10px solid  #0F218D; }</style>" ).appendTo( "#a2" );
    valor = 0;
});

$('#boton3').on('click',function(){
    if(control >0){
        $('.boton').attr("disabled", true);
      }else{
    $('.boton').attr("disabled", false);
    $('#vehiculo').hide();
    $('#formulario').hide();
    $('#datos').fadeIn(1000);
    $('#a3').css({
        "color":"black",
        "background":"white" 
    })
    $( "<style> #a3:before { border-left:10px solid  white; }</style>" ).appendTo( "#a3" );
    var datosFormulario = $('#formulario');
    $('#nombre_datos').append(" "+datosFormulario[0][0].value);
    $('#apellido_datos').append(" "+datosFormulario[0][1].value);
    $('#cedula_datos').append(" "+datosFormulario[0][2].value);
    $('#matricula_datos').append(" "+datosFormulario[0][4].value);
    $('#placa_datos').append(" "+datosFormulario[0][5].value);
    $('#marca_datos').append(" "+datosFormulario[0][6].value);
    $('#modelo_datos').append(" "+datosFormulario[0][7].value);
    $('#color_datos').append(" "+datosFormulario[0][8].value);
}
});

$('#boton4').on('click',function(){
    $('#datos').hide();
    $('#formulario').fadeIn(1000);
    $('#vehiculo').fadeIn(1000);
    $('#a3').css({
        "color":"white",
        "background":"#0F218D" 
    })
    $( "<style> #a3:before { border-left:10px solid  #0F218D; }</style>" ).appendTo( "#a3" );
});

$('#boton5').on('click',function(){
  
});

$('.validar').on('focusout',function(){
 var valor = $(this).val();
    if(valor == '' || valor == null){
        control += 1 ;
        $(this).css({"border-color":"red"});
      }else{
        control -=1;
        $(this).css({"border-color":""});
        $('.boton').attr("disabled", false);
      }
})

$('.letras').on('input',function(){
        this.value = (this.value).replace(/[^A-Za-z]/g,'');
});
  
$('.numeros').on('input',function(){
    this.value = (this.value).replace(/[^0-9]/g,'');
});

$('.numerosLetras').on('input',function(){
    this.value = (this.value).replace(/[^A-Za-z0-9]/g,'');
});
});