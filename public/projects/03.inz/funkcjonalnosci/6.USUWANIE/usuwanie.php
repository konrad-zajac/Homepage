<?php
if (isset($_POST["do_usuniecia_id"]))
{
//$do_usuniecia_id = $_POST["do_usuniecia_id"];
//-------------------------------------------------zapytanie do bazy--------------------------------------------------
try
{
$usune = $_POST["do_usuniecia_id"];
$pdo = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$zapytanie = "DELETE FROM OCENY WHERE ID_PG = '".$usune."'";
$stmt = $pdo->query($zapytanie);
$stmt->closeCursor();



$zapytanie = "DELETE FROM PUNKTY WHERE ID = '".$usune."'";
    //-------------------------------------------------1-zrobienie zapytania--------------------------------------------------
$stmt = $pdo->query($zapytanie);
    //-------------------------------------------------1-zrobienie zapytania--------------------------------------------------
$stmt->closeCursor();


}
catch(PDOException $e)
{
echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
}
//-------------------------------------------------zapytanie do bazy--------------------------------------------------

}

unset($_POST["do_usuniecia_id"]);

echo "<!DOCTYPE html>";
echo "<html lang=\"pl\">";
echo "<meta charset=\"utf-8\">";

echo "<head>";
echo "<title>Usuwanie punktu</title>";
echo "<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">";
echo "</head>";



echo "<header>";
echo "<legend class=\"navbar navbar-default text-center\">";
echo "<h1 class=\"bg-primary\">";
echo "</i>";
echo "</a>";

echo "<i class=\"glyphicon glyphicon-trash\">";
echo "</br>";
echo "</i>Usuwanie punktu</h1>";
echo "    </legend>";


echo "</header>";
echo "<body>";
echo "<div class=\"container\">";
echo "<form action=\"index.php?podstrona=usuwanie\" method=\"POST\" class=\"tablica\" >";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Nazwa punktu</th><th>Nr lokalu</th><th>ulica</th><th>miasto</th><th>godziny otwarcia</th><th>godziny zamknięcia</th></tr>\n";

//-------------------------------------------------zapytanie do bazy--------------------------------------------------

try
    {
        $conn = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //--------------------------------------------------zrobienie zapytania--------------------------------------------------
        $stmt = $conn->prepare("SELECT * FROM PUNKTY");
        //-------------------------------------------------1-zrobienie zapytania--------------------------------------------------
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while ($wiersz = $stmt->fetch())
            {
                echo "<tr>";
                echo "<td><button class=\"usuwanie\"
                type=\"submit\"
                onClick=\"return confirm('Usunac wybrany punkt?')\"
                name=\"do_usuniecia_id\" value=\"".$wiersz["ID"]."\">".$wiersz["ID"]."
                </button></td>";
                echo "<td>".$wiersz["nazwa"]."</td>";
                echo "<td>".$wiersz["NR_DOMU"]."</td>";
                echo "<td>".$wiersz["ULICA"]."</td>";
                echo "<td>".$wiersz["MIASTO"]."</td>";
                echo "<td>".$wiersz["g_o"]."</td>";
                echo "<td>".$wiersz["g_z"]."</td>";
                echo "</tr>\n";
            }
    }
    
    catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    $conn = null;

    echo "</table>";
    echo "</form>";

?>

</div>

</body>
</html>

