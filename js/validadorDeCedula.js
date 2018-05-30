$(document).ready(function(e){
 
 $('#boton1').on('click',function(){

    var cedula =0;
    var cedulaLimpia =0;
    var ultimoDiGito =0;
    var par =0;    
    var valoresPar=0;
    var valoresImpar=0; 
         
    cedula =  $('.cedula').val();
    cedulaLimpia = cedula.replace("-","");
    cedulaLimpia = cedulaLimpia.replace("-",""); 
    ultimoDiGito = parseInt(cedulaLimpia.charAt(10));

    var control = 0; 
       var numero;
        for(var x= 0; x <= (cedulaLimpia.length-2); x++){
            
             numero = parseInt(cedulaLimpia.charAt(x));
            
            if(control === 0){
            valoresImpar += numero;
                control = 1;
                
            }else{
                
                par = numero;
                par =  par * 2;
            
                if(par>= 10){
                   par = (par - 10)+1; 
                      
                }
                
                valoresPar += par; 
                 
                control = 0;
            }
        }
         
         valoresPar = valoresImpar + valoresPar;
         
    do{
        valoresPar -= 10;
    }while(valoresPar>=10);
    
    if(valoresPar != 0)
        {
          valoresPar = 10 - valoresPar; 
        }  
    
    if(ultimoDiGito != valoresPar){
        alert("la cedula no es valida");
        e.preventDefault();
    }
    
    cedula =0;
    cedulaLimpia =0;
    ultimoDiGito =0;
    par =0;    
    valoresPar=0;
    valoresImpar=0;
    numero=0;

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
});
