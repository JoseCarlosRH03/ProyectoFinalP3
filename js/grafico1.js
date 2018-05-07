$(document).ready(function(){

    llamar(0);
    $('#formulario').on('change',function(){
        llamar( $('#formulario').val());
    });
     
 function llamar(a){
        
        var serie = new Array;
        var parametros = {
                "valor" : a
         };
         
         $.ajax({ url:'../../php/cargador.php', type: 'POST',dataType:'json', data: parametros , beforeSend: function(){}
          
})
.done(function(campos){

    
    $('#tabladinamica').append('<tr><th>Años</th><th>Enero</th><th>Febrero</th><th>Marzo</th><th>Abril</th><th>Mayo</th><th>Junio</th><th>Julio</th><th>Agosto</th><th>Septiembre</th><th>Octubre</th><th>Noviembre</th><th>Diciembre</th></tr>');

for(x in campos){
var a = parseInt(campos[x].Enero); var b = parseInt(campos[x].Febrero);
var c =  parseInt(campos[x].Marzo);var d =  parseInt(campos[x].Abril);
var e =  parseInt(campos[x].Mayo);var f =  parseInt( campos[x].Junio);
var g =  parseInt(campos[x].Julio);var h =  parseInt(campos[x].Agosto);
var i =  parseInt(campos[x].Septiembre);var j =  parseInt(campos[x].Octubre);
var k =  parseInt(campos[x].Noviembre);var l =  parseInt(campos[x].Diciembre);

$('#tabladinamica').append('<tr><th>'+campos[x].fecha.toString()+'</th><td>'+a.toString()+'</td><td>'+b.toString()+'</td>'+
'<td>'+c.toString()+'</td><td>'+d.toString()+'</td><td>'+e.toString()+'</td><td>'+f.toString()+'</td><td>'+g.toString()+'</td><td>'+h.toString()+'</td>'+
'<td>'+i.toString()+'</td><td>'+j.toString() +'</td><td>'+k.toString()+'</td><td>'+l.toString()+'</td></tr>');

serie.push({ name: 'Year '+campos[x].fecha,data:[a,b,c,d,e,f,g,h,i,j,k,l]});

}



Highcharts.chart('grafico-1', {
chart: {
    type: 'column'
},
title: {
    text: ''
},
subtitle: {
    text: 'algo'
},
xAxis: {
    categories: [ 'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'],
    title: {
        text: null
    }
},
yAxis: {
    min: 0,
    title: {
        text: ' algo',
        align: 'high'
    },
    labels: {
        overflow: 'justify'
    }
},
tooltip: {
    valueSuffix: ' millions'
},
plotOptions: {
    bar: {
        dataLabels: {
            enabled: true
        }
    }
},
legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'top',
    x: -40,
    y: 80,
    floating: true,
    borderWidth: 1,
    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
    shadow: true
},
credits: {
    enabled: false
},
series: serie
});

})
      
};
});

