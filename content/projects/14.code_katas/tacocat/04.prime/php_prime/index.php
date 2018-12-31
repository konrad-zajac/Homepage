<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konrad Zając - Prime number</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container-fluid jumbotron text-center" style="padding: 0;margin:0">
    <h1 style="margin-top: 0">Prime number</h1>
</div>
<body>
 <?php
 function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

   if (empty($_POST["number"]))
    {
    echo"<div class=\"container\" style=\"margin-top: 10%\">";
    echo"    <div class=\"container\">";
    echo"  ";
    echo"  <form class=\"form-inline\" action=\"index.php\" method=\"POST\">";
    echo"    <div class=\"form-group\">";
    echo"";
    echo"      <label for=\"number\">number </label>";
    echo"";
    echo"      <input type=\"number\" min=\"0\" class=\"form-control\" id=\"number\"  name=\"number\">";
    echo"    </div>";
    echo"    <button type=\"submit\" class=\"btn btn-default\">Submit</button>";
    echo"  </form>";
    }
    else
    {
        $inserted_number = $_POST["number"];
        if (empty($time_start))
        {
            $time_start = 0;
        }
        $time_start = microtime(true);
        for ($checked_number = 2;$checked_number <= $inserted_number ; $checked_number++)
        {
            $is_dividibele = 0;
            for ($possible_dividers = 2;$possible_dividers <= $inserted_number; $possible_dividers++)
            {
                if ($checked_number % $possible_dividers == 0)
                {
                    $is_dividibele += 1;
                }
                
            }
             if ($is_dividibele == 1)
             {
                    echo "<div class=\"container-fluid  text-center\">";
                    echo "<span         style=\"    font-size: 150%;\">".$checked_number." "."</span>";

                    echo "</div>";
             }



         }
         $time_end = microtime_float();
$time = $time_end - $time_start;
         echo "<div class=\"container-fluid  text-center\">";
             

echo "<span style=\"    font-size: 150%;\">operation done in".$time." seconds</span>";

                    echo "</div>";


    }


//  if ((empty($_POST["number"]))
//  {
 
// }
 ?>
</body>
</html>
