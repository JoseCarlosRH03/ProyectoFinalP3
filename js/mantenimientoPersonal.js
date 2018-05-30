$(document).ready(function(e){

    var radio = '';

    $('.radio1').on('click', function(){
       radio = this.value;
    })
	
$('select').on('change',function(){
    var valor = $(this).val();
    alert(valor);
});

 
    $('#boton5').on('click',function(){
      
        alert($(' option:selected').text());

        $.ajax({ url:'../../php/', type: 'POST',dataType:'json', data: datosFormulario, beforeSend: function(){}
    })
    .done(function(val){
       if(val != 2){
            alert('error');
       }else{
            location.reload();
       }
    
    
    }) 
    
    });

});
   