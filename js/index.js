$('#boton').on('click','#formulario', function(){

   // e.preventDefault();
    
    $.ajax({ url:'php/Login.php', type: 'POST',dataType:'json', data: $(this).serialize(), beforeSend: function(){}
          
    })
    .done(function(user){
        if(user[2] == 'admin'){
            $('#nombre').val('');
            location.href = '../paginas/admin.php';
        }else if(user[2] == 'rango2'){
            $('#nombre').val('');
            location.href = '../paginas/registro.php';
        }else if(user[2] == 'rango1'){
            $('#nombre').val('');
            location.href = '../paginas/escaner.php';
        }else{
           $('#formulario p').html('<p>confirmar que todo está correcto</p>');
           $('#formulario p').css({color:'red'});
        }
    })
});
