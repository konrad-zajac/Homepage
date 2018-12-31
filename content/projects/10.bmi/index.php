
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konrad Zając - BMI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style >
form
{
    margin: auto;
}


    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
<div class="container-fluid jumbotron text-center" style="padding: 0;margin:0">
    <h1 style="margin-top: 0">Body Mass Index</h1>
</div>
<body>
    <?php

        if ((empty($_POST["weight"])) and (empty($_POST["height"])))
        {
echo " <div class=\"container-fluid\"         style=\"margin-top:10%\">";
    echo "<div class=\"row\">";

    echo "<div class=\"col-12 text-center\">";

    echo"<div class=\"col-sm-5\"  >";
    echo"</div>";

    echo"<div  class=\"col-sm-2\">";
    echo"  <form class=\"form-inline\" action=\"index.php\" method=\"POST\">";

    echo "<table class=\"text-center\"  >";
        echo "<tr>";
            echo "<td>";
               echo " Height [m]";
            echo "</td>";
               echo "<td>";
            echo"      <input min=\"0\" step=\"0.01\"  type=\"number\"  id=\"height\"  name=\"height\">";
                
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>";
                          echo " Weight [kg]"; 

            echo "</td>";
            echo "<td>";
            echo"      <input type=\"number\" min=\"0\"  step=\"0.01\" id=\"weight\"  name=\"weight\">";

                
            echo "</td>";
        echo "</tr>";
       
        echo "<tr         style=\"height:40%\">";
    echo "        <td rowspan=\"2\">";

                
            echo "</td>";
        echo "</tr>";
    echo "</table>";
     echo"<div  >";
     echo"    <button type=\"submit\" class=\"btn btn-primary pull-right\">Submit</button>";
    echo"</div>";
    

    echo"  </form>";
    echo"</div>";

    echo"<div  class=\"col-sm-5\">";
    echo"</div>";
echo"</div>";


        }
        else
        {
            $perfect_bmi=21.75;
            $weight = $_POST["weight"];
            $height = $_POST["height"];
            $height2 = $height * $height;
            $bmi = $weight/$height2;
            $us_bmi=round($bmi, 2);
            $bmi_difference=abs($us_bmi-$perfect_bmi);
            $kg_difference=$height2*$bmi_difference;
            $kg_difference=round($kg_difference,2);
            if($bmi <= 15)
                 {
                    $result = "<h1>Very severely underweight</h1>";
                 }
                elseif (($bmi>=15) && ($bmi<=16))
                {
                  $result = "<h1>Severely underweight</h1> ";
                }
                
                elseif (($bmi>16) and ($bmi<=18.5))
                {
                  $result = "<h1>Underweight</h1> ";
                }
                elseif ($bmi>18.5 and $bmi<=25)
                {
                  $result = "<h1>Normal</h1> ";
                }
                elseif ($bmi>25 and $bmi<=30)
                {
                  $result = "<h1>Overweight</h1> ";
                }
                elseif ($bmi>30 and $bmi<=35)
                {
                   $result = "<h1>Obese Class I</h1> ";
                }
                elseif ($bmi>35 and $bmi<=40)
                {
                   $result = "<h1>Obese Class II</h1> ";
                }
                elseif ($bmi>35)

                {
                 $result = "<h1>Obese Class III</h1> ";
                }

                if ($us_bmi < $perfect_bmi)
                {
                    $bmi_result="You could weigh more .".$kg_difference."kg";
                }
                elseif ($us_bmi > $perfect_bmi)
                {
                 $bmi_result="You could slim down ".$kg_difference."kg";   
                }
                



               echo "<h1 style='margin-left: 30%'>Entered the weight
                <span style='color: red'>$weight kg</span>,height
                <span style='color: red'>$height m</span>.
                </br> 
                </br>your bmi  =  <span style='color: red'>$us_bmi  </span>
                </br> 
                $bmi_result
                </br> that means <span style='color: red'>$result </span>";

                 
        }



    ?>


</div>


</body>
</html>
