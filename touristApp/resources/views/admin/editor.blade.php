    <!DOCTYPE HTML>
<html>
	<head>
		<title>Travalers &mdash; Colorlib Website Template</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="css/completo.css" type="text/css" rel="stylesheet"/>
		<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

	  </head>
	<body>
		<div class="container-fluid">
			<div class="row justify-content-center mb-5">
				<h2 class="demo-text">EDITOR DE TEXTO</h2>
				<div class="container">
					<div class="row justify-content-center mb-5">
						<div class="col-lg-12 nopadding">
							<textarea id="txtEditor"></textarea>
						</div>
					</div>
				</div>
			</div>
			<li class="row justify-content-center mb-5"><a href="" class="btn btn-primary py-2 px-2 text-white">ACEPTAR CAMBIOS</a></li>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script rel="stylesheet" href="{{ asset('/js/app.js') }}"></script>

		<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>
	</body>
</html>
