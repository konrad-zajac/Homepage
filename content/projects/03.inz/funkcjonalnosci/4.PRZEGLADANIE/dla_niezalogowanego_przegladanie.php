<?php
    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }
        
        function current() {
            return "<td class=\"cza1\"style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }
        
        function beginChildren() {
            echo "<tr class = \"zielone\">";
        }
        
        function endChildren() {
            echo "</tr>" . "\n";
        }
    }
    include 'config_lok.php';
// DOCTYPE ##################################
    echo "<!DOCTYPE html>";
    echo "<html lang=\"pl\">";
    echo "<meta charset=\"utf-8\">";
// DOCTYPE ##################################


// HEADER ##################################
echo "<header>";
    echo "    <legend class=\"navbar navbar-default text-center\">";
    echo "  <h1 class=\"bg-primary\">";
    echo " <i class=\"glyphicon glyphicon-th-list\">";
    echo "    </i>Browsing - for an unregisterd user</h1>";
    echo "    </legend>";
echo "</header>";
// HEADER ##################################
    try {
        $conn = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $zapytanie_o_srednie = $conn->prepare(
          "SELECT PUNKTY.NAZWA,
                                                  miasto,
                                                  ulica,
                                                 nr_domu,
          (AVG ( OCENA_WYSTROJ)),
          (AVG ( OCENA_MUZYKA)),
          (AVG ( OCENA_SMAK)),
          (AVG (OCENA_ROZNORODNOSC)),
          (AVG (OCENA_CENA)),
                            (
          (AVG ( OCENA_WYSTROJ) )+
          (AVG ( OCENA_MUZYKA))+
          (AVG ( OCENA_SMAK)    )+
          (AVG (OCENA_ROZNORODNOSC))+
          (AVG (OCENA_CENA))
           )
          /
          (
           5            )
            FROM Oceny INNER JOIN PUNKTY ON Oceny.ID_PG = PUNKTY.ID GROUP BY ID_PG;");
        $zapytanie_o_srednie->execute();
            //--tu

       

       echo "<center>";
       echo "<table style='border: solid 1px black;'>";

       echo "<tr><th>Nazwa punktu gastronomicznego</th>
				<th>Miasto</th>
				<th>Ulica</th>
				<th>numer domu</th>
				<th>średnia ocena wystroju</th>
				<th>średnia ocena muzyki</th>
				<th>średnia ocena smaku</th>
				<th>średnia ocena różnorodności</th>
				<th>średnia ocena ceny</th>
				<th rowspan=\"2\">średnia arytmetyczna
				</th><!--<th>personalne wagi</th>--></tr>";
       echo "<tr></tr>";
       
       
       echo "</center>";

        $result = $zapytanie_o_srednie->setFetchMode(PDO::FETCH_ASSOC);
       foreach(new TableRows(new RecursiveArrayIterator($zapytanie_o_srednie->fetchAll())) as $k=>$v) {
       echo $v;
       }
       }
       catch(PDOException $e) {
       echo "Error: " . $e->getMessage();
       }

    
    $conn = null;
    echo "</table>";
                                                
                                                  
