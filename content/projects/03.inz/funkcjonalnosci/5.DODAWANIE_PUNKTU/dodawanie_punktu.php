<?php
    echo "<!DOCTYPE html>";
    echo "<html lang=\"pl\">";
    echo "<head>";
    echo "<meta charset='utf-8'>";
    
    
    echo "<title>Dodawanie punktu</title>";
        ?>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../dist/bootstrap-clockpicker.min.css">
        <!-- jQuery and Bootstrap scripts -->
        <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
        <!-- ClockPicker script -->
        <script type="text/javascript" src="../../dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
.find('input').change(function(){
                      // TODO: time changed
                      console.log(this.value);
                      });
$('#demo-input').clockpicker({
                             autoclose: true
                             });

if (something) {
        // Manual operations (after clockpicker is initialized).
    $('#demo-input').clockpicker('show') // Or hide, remove ...
    .clockpicker('toggleView', 'minutes');
}
</script>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<header>
    <legend class="navbar navbar-default text-center">
        <h1 class="bg-primary">

            <i class="glyphicon glyphicon-plus">
                </br>
            </i>Dodawanie punktu</h1>
    </legend>
</header>
<body>
<!-- container o--------------------------------------------------------------------------------------------------->
<div class="container">
<!-- container o--------------------------------------------------------------------------------------------------->

    <div class="row">
        <div class="col-md-7 col-md-offset-3">
<!-- form --------------------------------------------------------------------------------->
<form class="form-horizontal text-center" method="POST" action="#">

            <!-- 1 input o --------------------------------------------------------------------------------->
            <div  class="form-group" >
                
                <label class="control-label" ></label>
                    <input required name="nazwa_punktu" type="text" placeholder="Nazwa" ><span style = "color:red; font-size: 30px">*</span>
					</br>
<input required  name="nr_domu_punktu" type="text" placeholder="Nr domu"><span style = "color:red; font-size: 30px">*</span>

					</br>
<input required  name="ulica_punktu" type="text" placeholder="Ulica" ><span style = "color:red; font-size: 30px">*</span>

					</br>
<input required name="miasto_punktu" type="text" pattern="([A-Z][a-z]+)" placeholder="Miasto" ><span style = "color:red; font-size: 30px">*</span>

					</br>
<input required name="telefon_do_punktu" type="text" placeholder="Telefon"  pattern="([0-9]+)" ><span style = "color:red; font-size: 30px">*</span>

					</br>
                    <p>nieregularne godziny</p>
                    <input name="nieregularne_godziny" type="checkbox"  class="form">

                </div>
            <!-- 1 input z --------------------------------------------------------------------------------->
</br>
<div class="row" >


<label>Od

</table><div style = "width: 100px" class="input-group clockpicker">

<input type="text" class="form-control" name="od" value="09:30">
<span class="input-group-addon">
<span class="glyphicon glyphicon-time"></span>
</span>

</div>
</label>

<label>Od
</table><div style = "width: 100px" class="input-group clockpicker">
<input type="text" class="form-control" name="do" value="09:30">
<span class="input-group-addon">
<span class="glyphicon glyphicon-time"></span>
</span>
</div>
</label>




<script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
</div>
<div class="clearfix"></div>
<button name="button" value="dodaj_button_wcisniety"  class="btn btn-primary">Dodaj</button>


            <!-- 1input z --------------------------------------------------------------------------------->
        
               </form>
<!--form --------------------------------------------------------------------------------->
</div>
</div>
</div>

</body>
<?php
//--------------------------------------------------najpierw-polaczenie-z-baza--------------------------------------------------
try
{
    $pdo = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
 {
			    echo "Connection failed: " . $e->getMessage();
 }
//--------------------------------------------------najpierw-polaczenie-z-baza--------------------------------------------------
if (!(isset($_POST["button"])))
    {
    $stan_buttona = 0;
    }
    else
    {
     $stan_buttona = $_POST["button"];
    }
if ($stan_buttona)
{
        //------tu-te-zmienne-globalne-przechodza-na-lokalne--------------
		$nazwa_punktu = $_POST["nazwa_punktu"];
      $nr_domu_punktu = $_POST["nr_domu_punktu"];
        $ulica_punktu = $_POST["ulica_punktu"];
       $miasto_punktu = $_POST["miasto_punktu"];
   $telefon_do_punktu = $_POST["telefon_do_punktu"];
    if(isset($_POST["nieregularne_godziny"]))
   {
	    $od = 0;
		$do = 0;
   }
   else
   {
                  $od = $_POST["od"];
                  $do = $_POST["do"];
   
   }
        $stan_buttona = $_POST["button"];

    
//------tu-te-zmienne-globalne-przechodza-na-lokalne--------------
    
    
        //---------robienie-zapytania--------
        $sql = " INSERT INTO PUNKTY
			(
			 NAZWA,
			 NR_DOMU,
			 ULICA,
			 MIASTO,
			 G_O,
			 G_Z,
			 TELEFON
			 )
			VALUES
			( 
			 '$nazwa_punktu',
			  '$nr_domu_punktu',
			  '$ulica_punktu',
			  '$miasto_punktu',
			  '$od',
			  '$do',
			  '$telefon_do_punktu'
			  );
			  ";
        //---------wysylanie-zapytania--------
        $pdo->query($sql);
        //---------wysylanie-zapytania--------
}
    

?>
</html>
