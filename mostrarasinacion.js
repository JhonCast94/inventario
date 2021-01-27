$(document).ready(function(){

	$('#disponibilidad').on('change', function(){

		var selectValor = '#' + $(this).val();

		$('#ingresoAsig').children('div').hide();
		$('#ingresoAsig').children(selectValor).show();
	});


	$('#pais').on('change', function(){

		var selectpais = '#' + $(this).val();
		$('#ingresarpais').children('div').hide();
		$('#ingresarpais').children(selectpais).show();

	});
});