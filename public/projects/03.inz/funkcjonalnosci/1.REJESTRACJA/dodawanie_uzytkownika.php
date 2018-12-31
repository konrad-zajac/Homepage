<?php
    echo "<!DOCTYPE html>";
    echo "<html lang=\"pl\">";
    echo "<meta charset=\"utf-8\">";
    echo "<head>";
    echo "<title>Rejestracja</title>";
    echo "<link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">";
    echo "<link href=\"../css/stylish-portfolio.css\" rel=\"stylesheet\">";
    echo "<link href=\"../font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">";
    echo "<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">";
    echo "</head>";
echo "<header>";
echo "<legend class=\"navbar navbar-default text-center\">";
echo "<h1 class=\"bg-primary\">";
    echo "<i class=\"glyphicon glyphicon glyphicon-hand-right\">";
    echo "</i>";
echo "</i>Zarejestruj</h1>";
echo "</legend>";
echo "</header>";

    $flaga_zalogowania = 0;
    $flaga_admina = 0;
    $wpisany_login = 0;
    $wpisane_haslo = 0;

    
    if(isset($_POST["button"]))
    {
                 $wpisany_login = htmlspecialchars($_POST["login"]);
                 $wpisane_haslo = htmlspecialchars($_POST["haslo"]);
         $wpisana_waga_wystroju = htmlspecialchars($_POST["w_wystroj"]);
           $wpisana_waga_muzyki = htmlspecialchars($_POST["w_muzyki"]);
         $wpisana_waga_jedzenia = htmlspecialchars($_POST["w_jedzenia"]);
    $wpisana_waga_roznorodnosci = htmlspecialchars($_POST["w_roznorodnosci"]);
             $wpisana_waga_ceny = htmlspecialchars($_POST["w_ceny"]);
    
        //--------------------------------------------------najpierw-polaczenie-z-baza--------------------------------------------------
 
    
    try
        {
        $conn = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'p';
            //--------------------------------------------------zrobienie zapytania--------------------------------------------------
        $stmt = $conn->query("INSERT INTO USERS (LOGIN,HASLO,waga_cena,waga_muzyka,waga_wystroj,waga_jedzenia,waga_roznorodnosc)
				VALUES
				('$wpisany_login',
				 '$wpisane_haslo',
				 '$wpisana_waga_ceny',
				 '$wpisana_waga_muzyki',
				 '$wpisana_waga_jedzenia',
				 '$wpisana_waga_wystroju',
				 '$wpisana_waga_roznorodnosci');
				");
		
            //--------------------------------------------------zrobienie zapytania--------------------------------------------------
        
        if($wpisany_login == "ADMIN")
            {
exit("ADMIN JEST TYLKO JEDEN...");            }
        $stmt->closeCursor();
        }
    catch(PDOException $e)
        {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        }
    }
    

echo "<body>";

    echo "<div class=\"row\">";
    echo "<h1></br></h1>";
    echo "</div>";

echo "<section>";

    if(!$flaga_zalogowania)
    {
    $flaga_zalogowania = 0;
    }
if(!$flaga_zalogowania)
{
    echo "<div  class=\"row\">";
    
    echo "<div  class=\"container\" style = \" width: 300px;\">";
    echo "<h2>Dla nowych klientów</h2>";
    
    echo " <form class=\"Form\" action=\"dodawanie_uzytkownika.php\" method=\"POST\">";

    //login------------------------------------------------------------------------------------------------------------------
    echo "<div class=\"container\" >";
    echo "<input required type=\"text\" placeholder=\"login\" name=\"login\"><span style = \"color:red; font-size: 30px\">*</span>";
    echo "</div>";
    //login------------------------------------------------------------------------------------------------------------------

    //hasło------------------------------------------------------------------------------------------------------------------
    echo "<div class=\"container\" >";
    echo "<input required  type=\"text\" placeholder=\"hasło\" name=\"haslo\"><span style = \"color:red; font-size: 30px\">*</span>";
    echo "</div>";
   
    //hasło------------------------------------------------------------------------------------------------------------------

    //w_ceny----------------------------------------------------------------------------------------------------------------------------
    echo "<div class=\"container\" >";
    echo "<p style = \"padding-left:10px\" >1  waga ceny 6</p><input style = \"width: 130px;\" type=\"range\" name=\"w_ceny\" min=\"1\" max=\"6\">";
    echo "</div>";
    echo "</br>";
    //w_ceny----------------------------------------------------------------------------------------------------------------------------

    
    //w_muzyki----------------------------------------------------------------------------------------------------------------------------
    echo "<div class=\"container\" >";
    echo "<p style = \"padding-left:10px\" >1  waga muzyki 6</p><input style = \"width: 130px;\" type=\"range\" name=\"w_muzyki\" min=\"1\" max=\"6\">";
    echo "</div>";
    echo "</br>";
    //w_muzyki----------------------------------------------------------------------------------------------------------------------------

    //w_jedzenia----------------------------------------------------------------------------------------------------------------------------
    echo "<div class=\"container\" >";
    echo "<p style = \"padding-left:10px\" >1  waga jedzenia 6</p><input style = \"width: 130px;\" type=\"range\" name=\"w_jedzenia\" min=\"1\" max=\"6\">";
    echo "</div>";
    echo "</br>";
    //w_jedzenia----------------------------------------------------------------------------------------------------------------------------

    //w_wystroj------------------------------------------------------------------------------------------------------------------
    echo "<div class=\"container\" >";
    echo "<p style = \"padding-left:10px\" >1  waga wystroju  6</p><input style = \"width: 130px;\" type=\"range\" name=\"w_wystroj\" min=\"1\" max=\"6\">";
    echo "</div>";
    echo "</br>";
    //w_wystroj----------------------------------------------------------------------------------------------------------------------------
    

    //w_roznorodnosci----------------------------------------------------------------------------------------------------------------------------
    echo "<div class=\"container\" >";
    echo "<p style = \"padding-left:10px\" >1 waga roznoro. 6</p><input style = \"width: 130px;\" type=\"range\" name=\"w_roznorodnosci\" min=\"1\" max=\"6\">";
    echo "</div>";
    echo "</br>";
    //w_roznorodnosci----------------------------------------------------------------------------------------------------------------------------



    echo "<button onclick=\"foo()\"class=\" zarej btn btn-primary\" name=\"button\"  type=\"submit\" >Zarejestruj</button>";
    echo "</form>";
                             
}
                             
                             echo "<script>";
                             echo "function foo() { alert(\"Zarejestrowano nowego użytkownika!\")};";
                             echo "</script>";
                             
    echo "</body>";
    echo "</html>";

