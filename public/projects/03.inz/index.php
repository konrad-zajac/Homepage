<?php
require 'new.php';


//        try
//            {
//            $pdo = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
//            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                //--------------------------------------------------zrobienie zapytania--------------------------------------------------
//            $stmt  = $pdo->query("SELECT * FROM USERS WHERE LOGIN = '$wpisany_login' AND HASLO = '$wpisane_haslo'");
//
//                //--------------------------------------------------zrobienie zapytania--------------------------------------------------
//            if ($stmt->rowCount() === 1)
//            {
//                $result = $stmt->fetch(PDO::FETCH_ASSOC);
//                if (($result["LOGIN"] === $wpisany_login) and ($result["HASLO"] === $wpisane_haslo))
//                {
//                    $_SESSION["flaga_zalogowania"] = 1;
//                    $_SESSION["sesyjne_id"] = $result["ID"];
//                    $_SESSION["sesyjny_login"] = $wpisany_login;
//                    if ($wpisany_login === "ADMIN")
//                    {
//                        $_SESSION["flaga_admina"] = 1;
//                    }
//                    else
//                        {
//                        $_SESSION["flaga_admina"] = 0;
//                        }
//                }
//                else
//                    {
//                    echo"<p>niepoprawne dane</p>";
//
//                    }
//            }
//            $stmt->closeCursor();
//        }
//
//        catch(PDOException $e)
//        {
//            echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
//        }

//var_dump($_SESSION);
//var_dump($_POST);


       session_start();


//obsługa wylogowania
if(isset($_POST["wbutton"]) and empty($_POST["wbutton"]))
{
    unset($_SESSION["flaga_zalogowania"]);
    unset($_SESSION["sesyjne_id"]);
    unset($_SESSION["sesyjny_login"]);
    unset($_SESSION["flaga_admina"]);
    unset($_SESSION["waga_wystroj"]);
    unset($_SESSION["waga_muzyka"]);
    unset($_SESSION["waga_jedzenia"]);
    unset($_SESSION["waga_roznorodnosc"]);
    unset($_SESSION["waga_cena"]);
    $_SESSION["flaga_zalogowania"] = 0;
    unset($_POST);
}



    if(!empty($_POST["button"]) and !empty($_POST["login"]) and !empty($_POST["password"]))
	{

	//---------------------------------------------------polaczenie-z-baza--------------------------------------------------
        $login = htmlspecialchars($_POST["login"]);
        $password = htmlspecialchars($_POST["password"]);
//		$db_user = 'konradz';
//		$db_pass = 'okopokop22';
		$db_user = 'root';
		$db_pass = '';
//		$db_name = 'konradz_pl';
//		$db_host = 'mysql.cba.pl';
		$db_name = 'test';
		$db_host = '127.0.0.1';

//		$ob = new foodstr();
//		$ob ->set_login_and_password($login,$password);
//		$ob ->set_db_credentials($db_user,$db_name,$db_pass,$db_host);
//		$ob -> db_connect();
		db_connect($db_user,$db_name,$db_pass,$db_host);

	}
if (!isset($_SESSION["flaga_zalogowania"]))
{
    $_SESSION["flaga_zalogowania"] = 0;
}

if (!isset($_GET["podstrona"]))
{
    $_GET["podstrona"] = "glowna";
}

echo "<!DOCTYPE html>";
echo "<html lang='pl'>";

   echo "<head>";
        echo "<meta charset='utf-8'>";

        echo "<title>Aplikacja internetowa wspomagająca ocene punktów gastronomicznych</title>";
        
                echo "<link href='css/style_panelu.css' rel='stylesheet'>";
                echo "<link href='css/font.css' rel='stylesheet'>";
                echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";
                echo "<link href='css/stylish-portfolio.css' rel='stylesheet'>";
                echo "<link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>";
                echo "<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>";
                //////////////////////////SCRYPT/////////////////////////////
				echo "<script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>";
                echo "<script src='js/js.js' ></script>";
                echo "<script src='js/bootstrap.min.js'></script>";
                echo "<script src='js/jquery.js'></script>";
    echo "</head>";
    
    echo "<body>";
   ##########FLIP###################################################################################################################################

	///MALE OTWARTE
	echo "<div class='to_male' > 
		<p class='glyphicon glyphicon-one-fine-full-dot'></p>
		<p class='glyphicon glyphicon-one-fine-full-dot'></p>
		<p class='glyphicon glyphicon-one-fine-full-dot'></p>
	</div>";
	//MALE ZAMKNIETE

	//DUZE OTWARTE
	echo "<div class='to_duze' >";

          //POZIOM 0 ZAWSZE WIDOCZNE---------------------------------------------------------------------------
        echo "<section style='display:flex;'>";
         //WSTEP
         
            echo "<a
             href='../src/0.strony/wstep_do_inz.html'
              class='btn btn-lg btn-success mar'>
              <i class='glyphicon glyphicon-ice-lolly-tasted mar'>
              </i><b>Intro</b></a>";
        //WSTEP


         // STRONA DOMOWA
            echo "<a
             href='index.php?podstrona=glowna'
              class='btn btn-lg btn-success mar'>
              <i class='glyphicon glyphicon-home mar'>
              </i>
              <b>F00dstr main  </b>
              </a>";
        //STRONA DOMOWA

        //UWAGA
            echo "<a href='index.php?podstrona=dodawanie_uwagi' class='btn btn-lg btn-success mar'>
            <i class='glyphicon glyphicon-warning-sign mar'></i><b>Feedback</b></a>";
        //UWAGA

        //PRZEGLADNIE I REJESTRACJA
        if($_SESSION["flaga_zalogowania"] === 1)
        {
            echo "<a href='index.php?podstrona=przegladanie' 
            style = 'font-size: 20px ; width: 226px' 
            class='btn btn-lg btn-warning mar'>
            <i class='glyphicon glyphicon-th-list '></i>
            <b style = 'font-size: 23px ;'>Browsing++</b></a>";
        }
        else
        {
            echo "<a href='index.php?podstrona=przegladanie'
            style = 'font-size: 20px ; width: 226px' class='btn btn-lg btn-success mar'>
            <i class='glyphicon glyphicon-th-list smar'></i>
            <b style = 'font-size: 23px ;'>Browsing--</b></a>";
            echo "<a href='index.php?podstrona=dodawanie_uzytkownika' style = 'font-size: 20px ; width: 266px'
            class='btn btn-lg btn-success'><i class='glyphicon glyphicon-user  mar'></i>
            <b style = 'font-size: 30px ;'>Register</b></a>";
        }
        //PRZEGLADNIE I REJESTRACJA

        //POZIOM 0 ZAWSZE WIDOCZNE---------------------------------------------------------------------------

        //POZIOM 1 WIDOCZNE PO ZALOGOWANIU---------------------------------------------------------------------------
        if($_SESSION["flaga_zalogowania"] === 1)
        {
            echo "<a href='index.php?podstrona=dodawanie_oceny'
            style = 'font-size: 20px ;' 
            class='btn btn-lg btn-warning mar'>
            <i class='glyphicon glyphicon-star '>
            </i> <b style = 'font-size: 30px ;'> Ocena </b></a>";
        }
        //POZIOM 1 WIDOCZNE PO ZALOGOWANIU---------------------------------------------------------------------------

        //POZIOM 2 WIDOCZNE PO ZALOGOWANIU ADMINA---------------------------------------------------------------------------
        if(isset($_SESSION["flaga_admina"])&&($_SESSION["flaga_admina"] === 1))
        {
            echo  "<a href='index.php?podstrona=usuwanie' style = 'height: 62px ;' class='btn btn-lg btn-danger mar'><i class='glyphicon glyphicon-trash mar'></i><b style = 'font-size: 30px ;'>Usuwanie</b></a>";
            echo "<a href='index.php?podstrona=dodawanie_punktu' class='btn btn-lg btn-danger'><i class='glyphicon glyphicon-plus mar'></i><b style = 'font-size: 30px ;'>Dodaj punkt</b></a>";
        }
        //POZIOM 2 WIDOCZNE PO ZALOGOWANIU ADMINA---------------------------------------------------------------------------
        echo "</section>";
	echo "</div>";
//
//echo "<form method='post' action='index.php' >";
//            echo "<table style='width:10%; heigh:40%;'>";
//                echo "<tr>";
//                    echo "<td>";
//                        echo "<input type='text'  placeholder='login' name='login' >";
//                    echo "</td>";
//
//                    echo "<td rowspan='2'>";
//                        echo "<input
//                        value='ok'
//                        name='button'
//                        type='submit'
//                        style='width:50px;'
//                        class='btn logowanie_na_panelu btn-success'>
//                        <i class='glyphicon glyphicon-arrow-right mar' style='color:white;'></i></>";
//                    echo "<td>";
//                echo "</tr>";
//
//                echo "<tr>";
//                    echo "<td>";
//                        echo "<input  type='password'  placeholder='hasło' name='haslo'>";
//                    echo "</td>";
//                echo "</tr>";
//            echo "</table>";
//echo "<form>";
##########FLIP###################################################################################################################################

        if ($_GET["podstrona"] === "glowna")
        {
            include "strona_glowna.php";
        }
        elseif ($_GET["podstrona"] === "wstep")
			{
                include "wstep_do_inz.php";
			}
         elseif ($_GET["podstrona"] === "dodawanie_uwagi")
			{
                include "funkcjonalnosci/0.UWAGA/dodawanie_uwagi.php";
			}
        elseif ($_GET["podstrona"] === "dodawanie_uzytkownika")
			{
                include "funkcjonalnosci/1.REJESTRACJA/dodawanie_uzytkownika.php";
			}
        elseif ($_GET["podstrona"] === "dodawanie_oceny")
        {
            if (isset($_SESSION["flaga_zalogowania"]) && ($_SESSION["flaga_zalogowania"] === 1))
            {
                include "funkcjonalnosci/2.OCENIANIE/dodawanie_oceny.php";
            }
        }

        elseif ($_GET["podstrona"] === "przegladanie")
        {
            if (isset($_SESSION["flaga_zalogowania"]) && ($_SESSION["flaga_zalogowania"] === 1))
            {
                include "funkcjonalnosci/4.PRZEGLADANIE/dla_zalogowanego_przegladanie.php";
            }
            else
            {
                include "funkcjonalnosci/4.PRZEGLADANIE/dla_niezalogowanego_przegladanie.php";
            }
        }
        elseif ($_GET["podstrona"] === "dodawanie_punktu")
        {
            if (isset($_SESSION["flaga_zalogowania"]) && ($_SESSION["flaga_zalogowania"] === 1) && ($_SESSION["flaga_admina"] === 1))
            {
                include "funkcjonalnosci/5.DODAWANIE_PUNKTU/dodawanie_punktu.php";
            }
        }
        elseif ($_GET["podstrona"] === "usuwanie")
        {
            if (isset($_SESSION["flaga_zalogowania"]) && ($_SESSION["flaga_zalogowania"] === 1) && ($_SESSION["flaga_admina"] === 1))
            {
                include "funkcjonalnosci/6.USUWANIE/usuwanie.php";
            }
        }
    echo "</body>";
echo "</html>";
