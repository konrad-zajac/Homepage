<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konrad Zając - binary gap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    table td 
    {
        border: 1px solid black;
        text-align: center;
    }
        table thead 
    {
        border: 1px solid black;
    }
    </style>

</head>
<div class="container-fluid jumbotron text-center" style="padding: 0;margin:0">
    <h1 style="margin-top: 0">binary gap</h1>
</div>
<body>
<div class="container" >
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="number"  style="margin-left: 38%">number</label>
            <input type="number" style="margin-left:40%;width: 10%" name="number" class="form-control" id="number" >
        </div>
        <button style="margin-left: 42%" type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?
        if (isset($_POST["number"]))
        {
            $bg_num = 0;
            $num = $_POST["number"];
            if ($num == 0 )
            {
                $b_num = 0;
                 echo "<h1 style='margin-left: 30%'>The entered number is
                 <span style='color: red'>0</span>";
                  echo "</br>in binary it has the representation of <span style='color: red'>$b_num </span></br>";
                  echo "which, has <span style='color: red'> one </span> binary group  <p style='color: red'>";
                   echo "<table class=\" tavle-borderd\">";
                echo "<thead>";
                echo "<tr>";
                           echo " <td>&nbsp;group number&nbsp;</td>";
                           echo " <td>&nbsp;group value&nbsp;</td>";
                        echo"</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                
                    echo "<tr>";
                        echo "<td>1</td>";
                        echo "<td>0</td>";
                    echo "</tr>";                  
                echo "</tbody>";
                echo "<table>";

                  
                  


            }
            else
            {
            $b_num = decbin($num);   
             preg_match_all('/([0]+|[1]+)/', $b_num, $chars); 
                          echo "<h1 style='margin-left: 30%'>The entered number is
                 <span style='color: red'>$num</span>";
                                 echo "</br>in binary it has the representation of <p style='color: red'>$b_num </p>";
                $count_grup = count($chars[0]);
                $strlen_max = 0;
                $strlen_max_pos = 0;
                for ($li = 0; $li < count($chars[0]); $li++)
                {
                    $chars[1][$li] = strlen($chars[0][$li]);
                    if (($chars[1][$li] > $strlen_max) && ($chars[0][$li][0] == '0'))
                    {
                        $strlen_max = $chars[1][$li];
                        $strlen_max_pos = $li;
                    }
                }
                echo "which, has <span style='color: red'>".$count_grup."</span>  groups  <p style='color: red'>";
                echo "<table class=\" tavle-borderd\">";
                echo "<thead>";
                echo "<tr>";
                           echo " <td>&nbsp;group number&nbsp;</td>";
                           echo " <td>&nbsp;group value&nbsp;</td>";
                           echo " <td>&nbsp;group length&nbsp;</td>";
                        echo"</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                for ($li = 0; $li < count($chars[0]); $li++) 
                {
                    if ($chars[0][$li][0] == '1') {
                        // Pokoloruj na niebiesko
                    echo "<tr>";
                        echo "<td>".($li + 1)."</td>";
                        echo "<td style=\"color: blue\">".$chars[0][$li]."</td>";
                        echo "<td style=\"color: blue\">".$chars[1][$li]."</td>";
                    echo "</tr>";
                    }
                    else {
                        if ($li == $strlen_max_pos) {
                            // Pokoloruj na czerwono
                    echo "<tr>";
                        echo "<td>".($li + 1)."</td>";
                        echo "<td style=\"color: red\">->".$chars[0][$li]."<-</td>";
                        echo "<td style=\"color: red\">".$chars[1][$li]."</td>";
                    echo "</tr>";
                        }
                        else {
                            // Pokoloruj na zolto
                    echo "<tr>";
                        echo "<td>".($li + 1)."</td>";
                        echo "<td style=\"color: green\">".$chars[0][$li]."</td>";
                        echo "<td style=\"color: green\">".$chars[1][$li]."</td>";
                    echo "</tr>";
                        }
                    }
                }
                echo "</tbody>";
                echo "<table>";
                $zero_flag = 0;
                $one_flag = 0;
                  for ($li = 0; $li < count($chars[0]); $li++) 
                  {
                      if ($chars[0][$li] == "0" )
                       {
                          $zero_flag +=1;
                      }
                      else
                      {
                          $one_flag +=1;
                      }
                 }
               if ($zero_flag == 0)
               {
                echo "There are no groups of zeros";
               }
               elseif ($zero_flag == 1) 
               {
                echo "There is <span style='color: green'>".$zero_flag."</span> group of zeros";             
               }
               else
               {
                echo "There are <span style='color: green'>".$zero_flag."</span> groups of zeros, in wich one group is the largest";             
                }
                  echo " and
             <span style='color: blue'>".$one_flag."</span> groups of ones";
            }
        }
?>
</body>
</html>