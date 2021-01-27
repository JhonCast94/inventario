$(document).ready(function(){

	$('#tiponovedad').on('change',function(){

		var seleccionarNovedad = '#'+$(this).val();
		$('#reparacion').children('div').hide();		
		$('#reparacion').children(seleccionarNovedad).show();

	});
});