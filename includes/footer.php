<!--SCRIPTS-->
	<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
<!--Microsoft mgt loader-->
<script src="https://unpkg.com/@microsoft/mgt/dist/bundle/mgt-loader.js"></script>

<!--Dropdown plugin-->
	<script type="text/javascript">
      $(document).ready(function(){
        $('#id_prod_dev').select2();
      });
    </script>
    <script>
	$(document).ready(function() {
    $('.id_activo_D').select2();
	});
    </script>
    <script>
	$(document).ready(function() {
    $('.usuarioDam').select2();
	});
    </script>
    <script>
	$(document).ready(function() {
    $('.id_activo_rep').select2();
	});
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#activoEnReparacion').select2();
      });
    </script>
 	<script type="text/javascript">
      $(document).ready(function(){
        $('#select_asig').select2();
      });
    </script>
 	<script type="text/javascript">
      $(document).ready(function(){
        $('#autorizado_p').select2();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#usuariosD').select2();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#usuariosI').select2();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#serie').select2();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#productos').select2();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#usuarioA').select2();
      });
	</script>
   	<script type="text/javascript">
      $(document).ready(function(){
        $('#productosB').select2();
      });
    </script>
        <script type="text/javascript">
      $(document).ready(function(){
        $('#nombrep').select2();
      });
    </script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#categoria_bajas').select2();
	  });
	</script>
	  <script type="text/javascript">
	  $(document).ready(function(){
	    $('#categoria_catalogo').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#categoria').select2();
	  });
	</script>
	    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#categoria_activo').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#dev_id').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#fabricante').select2();
	  });
	</script>
	    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#tiponovedad').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#modelo').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#moneda').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#placainv').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#provedor').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#num_factura').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#categoriaprodAsig').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#num_placa').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#disponibilidad').select2();
	  });
	</script>
    <script type="text/javascript">
	  $(document).ready(function(){
	    $('#pais').select2();
	  });
	</script>
	<script type="text/javascript">
	  $(document).ready(function(){
	    $('#selectProduct').select2();
	  });
	</script>
	<script type="text/javascript">
	  $(document).ready(function(){
	    $('.js-example-basic-multiple').select2();
	  });
	</script>
	<!--filtros dependientes-->
	<script type="text/javascript">
		$(document).ready(function(){
			recargarListaprod();

			$('#categoria_activo').change(function(){
				recargarListaprod();
			});	
		})
	</script>
	<script type="text/javascript">
		function recargarListaprod(){
			$.ajax({
				type:"POST",
				url: "filtrocateg.php",
				data: "filtroProd=" + $('#categoria_activo').val(),
				success:function(r){
					$('#selectProduct').html(r);	
				}
			});
		}
	</script>

<script type="text/javascript">
		$(document).ready(function(){

			recargarlistaAsig();

			$('#categoriaprodAsig').change(function(){
				recargarlistaAsig();
			});
		})
	</script>

	<script type="text/javascript">
		function recargarlistaAsig(){
			$.ajax({
				type:"POST",
				url:"fltroprodasignaciones.php",
				data: "filtroAsig=" + $('#categoriaprodAsig').val(),
				success:function(a){
					$('#selectProductAsig').html(a);
				}
			});
		}
	</script>
	<script type="text/javascript">
	$(document).ready(function(){

		recargarlistaDev();

		$('#usuariosD').change(function(){
			recargarlistaDev();
		});
	})

</script>
	<script type="text/javascript">
		function recargarlistaDev(){
			$.ajax({
				type:"POST",
				url:"filtrodev.php",
				data: "filtrodev=" + $('#usuariosD').val(),
				success:function(d){
					$('#selectProductDev').html(d);
				}
			});
		}
	</script>
	<script type="text/javascript">
	$(document).ready(function(){

		categoriaBajas();

		$('#categoria_bajas').change(function(){
			categoriaBajas();
		});
	})

</script>
	<script type="text/javascript">
		function categoriaBajas(){
			$.ajax({
				type:"POST",
				url:"filtroBajas.php",
				data: "filtroBaja=" + $('#categoria_bajas').val(),
				success:function(b){
					$('#activo_baja').html(b);
				}
			});
		}
	</script>
</html>
