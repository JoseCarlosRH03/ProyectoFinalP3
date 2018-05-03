$(document).ready(function(){

    var datosFormulario;

$('#boton1').on('click',function(){

    var persona = $('#persona input');    

    for(var x=0; x <= 2; x++)
    {
        if( persona[x].value == '' || persona[x].value == null )
        {
            e.preventDefault(); 
        }
    }
    
    $('.boton').attr("disabled", false);
    $('#persona').hide();
    $('#vehiculo').fadeIn(1000);
    $('#a2').css({
        "color":"black",
        "background":"white" 
    })
    $( "<style> #a2:before { border-left:10px solid  white; }</style>" ).appendTo( "#a2" );
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
   
    var vehiculo = $('#vehiculo input');    

    for(var x=0; x <= 4; x++)
    {
        if( vehiculo[x].value == '' || vehiculo[x].value == null )
        {
            e.preventDefault(); 
        }
    }


    $('.boton').attr("disabled", false);
    $('#vehiculo').hide();
    $('#formulario').hide();
    $('#datos').fadeIn(1000);
    $('#a3').css({
        "color":"black",
        "background":"white" 
    })
    $( "<style> #a3:before { border-left:10px solid  white; }</style>" ).appendTo( "#a3" );
    datosFormulario = $('#formulario');
    $('#nombre_datos').val(""+datosFormulario[0][0].value);
    $('#apellido_datos').val(" "+datosFormulario[0][1].value);
    $('#cedula_datos').val(" "+datosFormulario[0][2].value);
    $('#matricula_datos').val(" "+datosFormulario[0][4].value);
    $('#placa_datos').val(" "+datosFormulario[0][5].value);
    $('#marca_datos').val(" "+datosFormulario[0][6].value);
    $('#modelo_datos').val(" "+datosFormulario[0][7].value);
    $('#color_datos').val(" "+datosFormulario[0][8].value);

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
    var datosFormulario = null;
});

$('#boton5').on('click',function(){
  
});

$('.validar').on('focusout',function(){
 var valor = $(this).val();
    if(valor == '' || valor == null){
        $(this).css({"border-color":"red"});
      }else{
        $(this).css({"border-color":""});
      }
})

$('.letras').on('input',function(){
        this.value = (this.value).replace(/[^A-Za-z\s]/g,'');
});
  
$('.numeros').on('input',function(){
    this.value = (this.value).replace(/[^0-9\s]/g,'');
});

$('.numerosLetras').on('input',function(){
    this.value = (this.value).replace(/[^A-Za-z0-9\s]/g,'');
});
});