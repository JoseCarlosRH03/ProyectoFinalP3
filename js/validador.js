$(document).ready(function(){

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
       
       $('.password').on('input',function(){
           this.value = (this.value).replace(/[^A-Za-z0-9-_@\s]/g,'');
       });
});


   