<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inventario ESRI</title>
	<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
	<!--TYPEAHEADE-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

 	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<!--Select2-->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<script src="mostrarasinacion.js"></script>

	<script src="mostrarreparacion.js"></script>

	<script src="mostrardañados.js"></script>

	<script src="jquery.repeater.js" type="text/javascript"></script>

	<!--Microsoft mgt loader-->
	<script src="https://unpkg.com/@microsoft/mgt/dist/bundle/mgt-loader.js"></script>	

	<style type="text/css">

		#reparacion div{
			display: none;
		}

		#damaged div{
			display: none;
		}

		#selectProductAsig{
			width: 11rem;
		}

		select{
			width: 14rem;
		}

		input{
			
		}
	</style>

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="main.php" class="navbar-brand">Inventario IT ESRI</a> 

	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="justify-content-end collapse navbar-collapse" id="navbarCollapse">
                  <a href="/signout" class="dropdown-item w-25">Sign Out</a>
                </div>
              </li>          
        </div>	 		
	</div>	     
</nav>