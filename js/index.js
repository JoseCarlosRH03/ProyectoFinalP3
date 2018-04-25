$(document).on('submit', function(e){

    e.preventDefault();

    $.ajax({ url:'php/Login.php', type: 'POST', data: $(this).serialize(), beforeSend: function(){}
          
    })
    .done(function(){

    })
});
