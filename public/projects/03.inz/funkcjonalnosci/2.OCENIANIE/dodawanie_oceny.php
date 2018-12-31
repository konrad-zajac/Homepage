<?php

$wpisany_login = $_SESSION["sesyjny_login"];
    
    $sesyjne_id = htmlspecialchars($_SESSION["sesyjne_id"]);
    $_POST["sesyjne_id"] = $sesyjne_id;


    echo "<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>";



    $do_oceny_id = NULL;


    echo "<!DOCTYPE html>";
    echo "<html lang=\"pl\">";
    echo "<head>";
        echo "<meta charset=\"utf-8\">";
        echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";

        echo "<title>Ocena</title>";
        echo "<title>Aplikacja internetowa wspomagająca ocene punktów gastronomicznych</title>";
        echo "<link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">";
        echo "<link href=\"../css/stylish-portfolio.css\" rel=\"stylesheet\">";
        echo "<link href=\"../font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">";
        echo "<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">";
    echo "</head>";

        echo "<legend class=\"navbar navbar-default text-center\">";
			echo "<h1 class=\"bg-primary\">";
			echo "</i>";
			echo "<i class=\"glyphicon glyphicon-star\"></br></i>Ocenę daje użytkownik $wpisany_login </h1>";
        echo "</legend>";
        


if(!(isset($_POST["do_oceny_id"])))
{
echo "<body>";
echo "<div class=\"row\">";
echo "<div class=\"container\" style = \" width: 300px;\">";
//FORM
//echo " <form class=\"Form\" action=\"funkcjonalnosci/2.OCENIANIE/dodawanie_oceny.php\" method=\"POST\" class=\"tablica\">";
echo " <form class=\"Form\" action=\"index.php?podstrona=dodawanie_oceny\" method=\"POST\" class=\"tablica\">";

//TU JEST TAT TABLICA DO WYBRANIA ID
    echo "<h1>Etap pierwszy wybierz punkt</h1>";

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Nazwa punktu</th></tr>\n";
try
{
$conn = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM PUNKTY");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

while ($wiersz = $stmt->fetch())
{
echo "<tr>";
echo "<td><button class=\"ocenianienie\"
type=\"submit\"
name=\"do_oceny_id\" value=\"".$wiersz["ID"]."\">".$wiersz["ID"]."
</button></td>";
echo "<td>".$wiersz["nazwa"]."</td>";
echo "</tr>\n";
}
}

catch(PDOException $e)
{
echo "Error: " . $e->getMessage();
}


$conn = null;
echo "</table>";

//TU JEST TAT TABLICA DO WYBRANIA ID

if(isset($_POST["do_oceny_id"]))
{

$do_oceny_id = htmlspecialchars($_POST["do_oceny_id"]);
$_SESSION["id_ocenianego_punktu_w_tablicy_sesyjnej"] = htmlspecialchars($_POST["do_oceny_id"]);

}
if(isset($_POST["button"]))
{
// $sesyjne_id =

$id_ocenianego_punktu_w_tablicy_sesyjnej = $_SESSION["id_ocenianego_punktu_w_tablicy_sesyjnej"];
$oc_muzyki = htmlspecialchars($_POST["oc_muzyki"]);
$oc_wystroj = htmlspecialchars($_POST["oc_wystroj"]);
$oc_jedzenia = htmlspecialchars($_POST["oc_jedzenia"]);
$oc_roznorodnosci = htmlspecialchars($_POST["oc_roznorodnosci"]);
$oc_ceny = htmlspecialchars($_POST["oc_ceny"]);


try
{
$pdo = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->query("INSERT INTO Oceny (ID_PG,ID_USERA,OCENA_WYSTROJ,OCENA_MUZYKA,OCENA_SMAK,OCENA_ROZNORODNOSC,OCENA_CENA) SELECT PUNKTY.ID,USERS.ID,'$oc_muzyki','$oc_wystroj ','$oc_jedzenia ','$oc_roznorodnosci ','$oc_ceny' FROM PUNKTY, USERS WHERE PUNKTY.ID = $id_ocenianego_punktu_w_tablicy_sesyjnej AND USERS.ID = $sesyjne_id;");
        // '$id_ocenianego_punktu_w_tablicy_sesyjnej' '$sesyjne_id'
    $stmt->closeCursor();
unset($_POST["do_oceny_id"]);

}
catch(PDOException $e)
{
echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
}
//-------------------------------------------------zapytanie do bazy--------------------------------------------------


}

echo "</div>";
echo "</div>";
echo "</body>";


    }
                   else
    {
echo "<body>";
echo "<div class=\"row\">";
echo "<div class=\"container\"  width: 300px;\">";
//FORM
echo " <form class=\"Form\" action=\"index.php?podstrona=dodawanie_oceny\" method=\"POST\" class=\"tablica\">";
           echo "<h1>Etap drugi nadaj oceny </h1>";
//OC ceny
echo "<div class=\"container\" >";
echo "<p style = \"padding-left:10px\" >1  ocena ceny 6</p><input style = \"width: 130px;\" type=\"range\" name=\"oc_ceny\" min=\"1\" max=\"6\">";
echo "</div>";
echo "</br>";
//OC ceny


//OC muzyki 
echo "<div class=\"container\" >";
echo "<p style = \"padding-left:10px\" >1  ocena muzyki 6</p><input style = \"width: 130px;\" type=\"range\" name=\"oc_muzyki\" min=\"1\" max=\"6\">";
echo "</div>";
echo "</br>";
//OC muzyki 

//OC jedzenia
echo "<div class=\"container\" >";
echo "<p style = \"padding-left:10px\" >1  ocena jedzenia 6</p><input style = \"width: 130px;\" type=\"range\" name=\"oc_jedzenia\" min=\"1\" max=\"6\">";
echo "</div>";
echo "</br>";
//OC jedzenia

//OC wystroju 
echo "<div class=\"container\" >";
echo "<p style = \"padding-left:10px\" >1  ocena wystroju  6</p><input style = \"width: 130px;\" type=\"range\" name=\"oc_wystroj\" min=\"1\" max=\"6\">";
echo "</div>";
echo "</br>";
//OC wystroju 


//OC roznorodnosci 
echo "<div class=\"container\" >";
echo "<p style = \"padding-left:10px\" >1 ocena roznoro. 6</p><input style = \"width: 130px;\" type=\"range\" name=\"oc_roznorodnosci\" min=\"1\" max=\"6\">";
echo "</div>";
echo "</br>";
//OC roznorodnosci 


//OC roznorodnosci 
echo "<div class=\"container\" >";

echo "<p style = \"padding-left:10px\" >komentarz</p><textarea style = \"width: 130px;\"  cols=\"11\" rows=\"6\"></textarea>";
echo "</div>";
echo "</br>";
//OC roznorodnosci 



echo "<button  class=\"btn btn-primary\" name=\"button\" value=\"1\"  type=\"submit\" >Oceń</button>";
//FORM
echo "</form>";


echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>";
echo "<script src=\"js/bootstrap.min.js\"></script>";

if(isset($_POST["do_oceny_id"]))
{

$do_oceny_id = htmlspecialchars($_POST["do_oceny_id"]);
$_SESSION["id_ocenianego_punktu_w_tablicy_sesyjnej"] = htmlspecialchars($_POST["do_oceny_id"]);

}
if(isset($_POST["button"]))
{
// $sesyjne_id =

$id_ocenianego_punktu_w_tablicy_sesyjnej = $_SESSION["id_ocenianego_punktu_w_tablicy_sesyjnej"];
$oc_muzyki = htmlspecialchars($_POST["oc_muzyki"]);
$oc_wystroj = htmlspecialchars($_POST["oc_wystroj"]);
$oc_jedzenia = htmlspecialchars($_POST["oc_jedzenia"]);
$oc_roznorodnosci = htmlspecialchars($_POST["oc_roznorodnosci"]);
$oc_ceny = htmlspecialchars($_POST["oc_ceny"]);

echo nl2br("po wcisnieciu buttona mam \n
ocena muzyki: $oc_muzyki\n
ocena wystroju: $oc_wystroj\n
ocena jedzenia: $oc_jedzenia\n
ocena roznorodnosci: $oc_roznorodnosci\n
ocena ceny: $oc_ceny\n
ja jako użytkoenik $wpisany_login o id $sesyjne_id\n
wystawiam ocene punktowi o id $id_ocenianego_punktu_w_tablicy_sesyjnej");

try
{
$pdo = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->query("INSERT INTO OCENY (ID_PG,ID_USERA,OCENA_WYSTROJ,OCENA_MUZYKA,OCENA_SMAK,OCENA_ROZNORODNOSC,OCENA_CENA)VALUES ( '$id_ocenianego_punktu_w_tablicy_sesyjnej','$sesyjne_id','$oc_muzyki','$oc_wystroj ','$oc_jedzenia ','$oc_roznorodnosci ','$oc_ceny');");
$stmt->closeCursor();
unset($_POST["do_oceny_id"]);

}
catch(PDOException $e)
{
echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
}
//-------------------------------------------------zapytanie do bazy--------------------------------------------------


}

echo "</div>";
echo "</div>";
echo "</body>";

    
    }
echo "</html>";
