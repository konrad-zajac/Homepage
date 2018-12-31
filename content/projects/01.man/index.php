<?//
//if(!isset($_GET['language']))
//	{
//		$_GET['language'] = 'EN';
//		$_SESSION['language'] = 'EN';
//	}
//var_dump($_GET);
//var_dump($_SESSION);
//?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Manuals</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
	@font-face
	{
		font-family: Bavro;
		src: url(Bavro.otf);
	}
	@font-face
	{
		font-family: Butler;
		src: url(AHAMONO-Regular.otf);
	}
</style>
<!--<script>-->
<!--	$(document).ready(function(){-->
<!--		$("#hide_id").click(function(){-->
<!--			$(this).hide();-->
<!--		});-->
<!--	});-->
<!--</script>-->
<body>
</div>

<div class="container">
	<div class="jumbotron">
		<div class="container">
<!--			<p id='hide_id'>metoda .hide sluzy do chowania wszystkich rzeczy z id = hide_id</p>-->
<!---->
<!--			--><?//
//			if(($_GET['language']) == 'EN')
//			{
//				echo "default";
//			}
//			else
//			{
//					$_SESSION['language'] = 'PL';
//				echo "zmiana";
//			}
//
//			?>
<!---->

			</button>
			<form
				id="language_form"
				action="index.php" method="GET">
				<div class="form-group">
<!---->
<!--					<label for="language">Language</label>-->
<!--					<select-->
<!--						name="language"-->
<!--						id="language"-->
<!--						onChange="language_change()"-->
<!--						style="width: 7%;float: right"-->
<!--						class="form-control">-->
<!--						<option value="EN" label="engilsch language" selected="selected">EN</option>-->
<!--						<option value="PL" label="polisch language" selected="selected">PL</option>-->
<!--					</select>-->
<!--					<select  name="language"-->
<!--							 value=""-->
<!--							 onchange="this.form.submit()"-->
<!--							 onChange="reloadPage();"-->
<!--							 style="width: 7%;-->
<!--							 float: right" class="form-control"-->
<!--							 id="language">-->
<!--						<option type="submit" value="EN">EN</option>-->
<!--						<option type="submit" value="PL">PL</option>-->
<!--					</select>-->

				</div>
			</form>


			<h1 style="text-align: center; font-family: Butler">Manua<span style="color: #00a644">l</span>s</h1>
		<div style="margin-left:40%; margin-right:20%;" class="btn-group">
			 <a
					href="01.Angular/index.html"
					type="button"
					class="btn  btn-primary">
				Angular
			</a>
			<!--
			<a
					href="02.GIT/index.html"
					type="button"
					class="btn  btn-primary">
				GIT
			</a> -->
			<!--<a-->
					<!--type="button"-->
					<!--href="03.HTML/index.html"-->
					<!--class="btn  btn-primary">-->
				<!--HTML-->
			<!--</a>-->
			<a
				id="im"
					href="04.image_magick/index.html"
					type="button"
					class="btn  btn-primary">
				Image_magick
			</a>
			<!-- <a
					href="05.jQuery/index.html"
					type="button"
					class="btn  btn-primary">
				jQuery
			</a>
-->

			<a
					href="06.js/index.html"
					type="button"
					class="btn  btn-primary">
				js
			</a>
			<a
					href="07.PHP/index.html"
					type="button"
					class="btn  btn-primary">
				PHP
			</a>
	<!--
			<a
					href="07.latex/index.html"
					type="button"
					class="btn  btn-primary">
				latex
			</a>
			-->
			<a
					href="09.Python/index.html"
					type="button"
					class="btn  btn-primary">
				python
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
