$(document).ready(function() {
    var $intervalo = $('#intervalo').closest('.ocultar').hide();
    var $semana = $('#semana').closest('.ocultar').hide();

    $('#frequencia').change(function() {         
        var selectedValue = $(this).val();
        
        if(selectedValue  === 'intervalos') {
            $semana.hide();
            $intervalo.show();
        } else if (selectedValue === 'semana') {
            $semana.show();
            $intervalo.hide();
        } else {
            $semana.hide();
            $intervalo.hide();
        }
    });
});