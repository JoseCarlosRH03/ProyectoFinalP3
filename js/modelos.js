$(document).ready(function(){

    $('select').on('change',function(){
        var valor = $(this).val();
        
        switch(valor) {
            case 'Acura':
            $('#modelos option').remove();
                $('#modelos').append(
                +'<option value="0">Todos los Modelos</option>'
                +'<option value="MDX">MDX</option>'
                +'<option value="NSX">NSX</option>'
                +'<option value="RDX">RDX</option>'
                +'<option value="RL">RL</option>'
                +'<option value="RSX">RSX</option>'
                +'<option value="T L">T L</option>'
                +'<option value="TLX">TLX</option>'
                +'<option value="TSX">TSX</option>'
                +'<option value="ZDX">ZDX</option>'); 
                break;
            case 'Alfa Romeo':
            $('#modelos option').remove();
            $('#modelos ').append(
                +'<option value="0">Todos los Modelos</option>'
                +'<option value="156">156</option>'
                +'<option value="159">159</option>'
                +'<option value="Mito">Mito</option>'); 
                break;
            case 'Aston Martin':
            $('#modelos option').remove();
            $('#modelos ').append(
            +'<option value="0">Todos los Modelos</option>'
            +'<option value="DB7">DB7</option>'); 
                break;
            case 'Audi':
            $('#modelos option').remove();
            $('#modelos ').append(
                +'<option value="0">Todos los Modelos</option>'
                +' <option value="A3">A3</option>'
                +'<option value="A4">A4</option>'
                +'<option value="A5">A5</option>'
                +'<option value="A6">A6</option>'
                +'<option value="A7">A7</option>'
                +'<option value="A8">A8</option>'
                +'<option value="Q2">Q2</option>'
                +'<option value="Q3">Q3</option>'
                +'<option value="Q5">Q5</option>'
                +'<option value="Q7">Q7</option>'
                +'<option value="R8">R8</option>'
                +'<option value="RS3">RS3</option>'
                +'<option value="RS7">RS7</option>'
                +'<option value="S3">S3</option>'
                +'<option value="S4">S4</option>'
                +'<option value="S5">S5</option>'
                +'<option value="S6">S6</option>'
                +'<option value="S7">S7</option>'
                +'<option value="S8">S8</option>'
                +'<option value="SQ5">SQ5</option>'
                +'<option value="TT">TT</option>'); 
                break;
            default:
                
        } 






    });

});