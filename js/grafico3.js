$(document).ready(function(){
    
    llamar(1);

    $('#formulario').on('change',function(){
        llamar( $('#formulario').val());
    });
     
 function llamar(a){
    
        var data = new Array;
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


data.push(a,b,c,d,e,f,g,h,i,j,k,l);



}

Highcharts.chart('grafico-3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares January, 2015 to May, 2015'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Enero',
            y: data[0]
        }, {
            name: 'Febrero',
            y:data[1],
            sliced: true,
            selected: true
        }, {
            name: 'Marzo',
            y: data[2]
        }, {
            name: 'Abril',
            y: data[3]
        }, {
            name: 'Mayo',
            y: data[4]
        }, {
            name: 'Junio',
            y: data[5]
        }, {
            name: 'Julio',
            y: data[6]
        }, {
            name: 'Agosto',
            y: data[7]
        }, {
            name: 'Septiembre',
            y:data[8]
        }, {
            name: 'Octubre',
            y: data[9]
        }, {
            name: 'Noviembre',
            y: data[10]
        }, {
            name: 'Diciembre',
            y: data[11]
        }]
        
    }]
});

})
  
};
});

series: [{
    name: 'Brands',
    colorByPoint: true,
    data: [{
        name: 'Enero',
        y: a
    }, {
        name: 'Febrero',
        y: b,
        sliced: true,
        selected: true
    }, {
        name: 'Marzo',
        y: c
    }, {
        name: 'Abril',
        y: d
    }, {
        name: 'Mayo',
        y: e
    }, {
        name: 'Junio',
        y: f
    }, {
        name: 'Julio',
        y: g
    }, {
        name: 'Agosto',
        y: h
    }, {
        name: 'Septiembre',
        y: i
    }, {
        name: 'Octubre',
        y: j
    }, {
        name: 'Noviembre',
        y: k
    }, {
        name: 'Diciembre',
        y: l
    }]
    
}]