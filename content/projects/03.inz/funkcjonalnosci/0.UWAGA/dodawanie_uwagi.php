<?php
if(isset($_POST["button"]))
    {
        if(isset($_POST["login"]))
            {
            if(isset($_POST["email"]))
                {
        $uwaga = htmlspecialchars($_POST["textarea"]);
        
            //---------------------------------------------------polaczenie-z-baza--------------------------------------------------
        try
        {
        $pdo = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //--------------------------------------------------zrobienie zapytania--------------------------------------------------
        $stmt = $pdo->query("INSERT INTO UWAGI (UWAGA) VALUES ('$uwaga');");
            //--------------------------------------------------zrobienie zapytania--------------------------------------------------
            $stmt->closeCursor();
        
        }
                catch(PDOException $e)
                {
                echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
                }
                }
            else
                {
                echo "wypełnij email";
                }

            
    }
    else
        {
        echo "wypełnij login";
        }
}
// DOCTYPE ##################################
    echo "<!DOCTYPE html>";
    echo "<html lang=\"pl\">";
    echo "<meta charset=\"utf-8\">";
// DOCTYPE ##################################

    
// HEAD ##################################
echo "<head>";
    echo "<title>uwaga</title>";
    echo "<link href=\"../../../inne/4.style/style_panelu.css\" rel=\"stylesheet\">";
    echo "<link href=\"../../css/bootstrap.min.css\" rel=\"stylesheet\">";
    echo "<link href=\"../../css/stylish-portfolio.css\" rel=\"stylesheet\">";
    echo "<link href=\"../../font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">";
    echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>";
    echo "<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">";
    echo "<script src=\"../../../inne/js/js.js\"></script>";
echo "</head>";
// HEAD ##################################

  // HEAD ##################################
echo "<header>";
    echo "<legend class=\"navbar navbar-default text-center\">";
    echo "<h1 class=\"bg-primary\">";
    echo "<i class=\"glyphicon glyphicon-warning-sign \">";
    echo "</i>";
    echo "</i>uwaga</h1>";
    echo "</legend>";
echo "</header>";
    
    echo "<body>";
    
    echo "<div class=\"row\">";
    echo "<h1></br></h1>";
    echo "</div>";
    
    echo "<section>";
       echo "<div  class=\"row\">";
    
    echo "<div  class=\"container\" style = \" width: 300px;\">";
    echo "<h2>Zgłoś uwagę</h2>";
    
        echo " <form class=\"Form\" action=\"dodawanie_uwagi.php\" method=\"POST\">";

        //login------------------------------------------------------------------------------------------------------------------
        echo "<div class=\"container\" >";
        echo "<input required type=\"text\" placeholder=\"login\" name=\"login\"><span style = \"color:red; font-size: 30px\">*</span>";
        echo "</div>";
        //login------------------------------------------------------------------------------------------------------------------

        //hasło------------------------------------------------------------------------------------------------------------------
        echo "<div class=\"container\" >";
        echo "<input required  type=\"text\" placeholder=\"email\" name=\"email\"><span style = \"color:red; font-size: 30px\">*</span>";
        echo "</div>";

        //hasło------------------------------------------------------------------------------------------------------------------

        //w_ceny----------------------------------------------------------------------------------------------------------------------------
        echo "<div class=\"container\" >";
        echo "<textarea required rows=\"22\" cols=\"100\" name=\"textarea\" placeholder=\"UWAGA\"></textarea>";
        echo "</br>";
        //w_ceny----------------------------------------------------------------------------------------------------------------------------




        echo "<button onclick=\"foo()\"class=\" zarej btn btn-primary\" name=\"button\"  type=\"submit\" >Zgłoś</button>";
        echo "</form>";



    echo "</body>";
      ?>


</html>
