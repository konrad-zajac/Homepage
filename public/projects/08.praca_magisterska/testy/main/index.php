
<!DOCTYPE html>
<html lang="en">
<head>
	<title>testy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../test.css">

</head>
<body>
</div>

<div class="container">
	<div class="jumbotron">
		<div class="container">

			</button>
			<form
				id="language_form"
				action="index.php" method="GET">
				<div class="form-group">

				</div>
			</form>


			<h2 style="text-align: center;">Testy</h2>
		<div style="margin-left:40%; margin-right:20%;" class="btn-group">
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test1a	
			</a>
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test1b	
			</a>
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test1c	
			</a>
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test1d	
			</a>
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test2a	
			</a>
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test2b	
			</a>
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test2c	
			</a>
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
			Test2d	
			</a>
		</div>
	</div>

</div>
	<script>
		$selectOption = $_POST['value'];

		function language_change()
		{

			alert("zmieniam na " + $("#language option:selected").text());
			$("#language_form").submit();
			location.reload();
		}
	</script>
</body>
</html>
