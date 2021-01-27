$(document).ready(function(){

	$('#tiponovedad').on('change',function(){

		var seleccionarNovedadD = '#'+$(this).val();
		$('#damaged').children('div').hide();		
		$('#damaged').children(seleccionarNovedadD).show();

	});
});