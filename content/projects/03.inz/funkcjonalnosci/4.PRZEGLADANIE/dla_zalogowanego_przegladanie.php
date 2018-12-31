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
    $login_wziety_z_sesji = $_SESSION["sesyjny_login"];

echo "<header>";
    echo "    <legend   class=\" navbar navbar-default text-center\">";
    echo "<h1  class=\"naw bg-primary\">"; 
    echo " <i class=\"glyphicon glyphicon-th-list\">";
    echo "    </i>Pzeglądanie - Dla użytkownika $login_wziety_z_sesji</h1>";
    echo "    </legend>";
echo "</header>";
    
    
    try {
        $conn = new PDO($namiary_na_szbd, $login_do_bazy, $haslo_do_bazy);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $zapytanie_o_srednie = $conn->prepare(
          "SELECT PUNKTY.NAZWA,
                                                  miasto,
                                                  ulica,
                                                  nr_domu,
          ROUND((AVG ( OCENA_WYSTROJ)     * (SELECT WAGA_WYSTROJ      FROM USERS WHERE LOGIN = '$login_wziety_z_sesji')) /5,2),
          ROUND((AVG ( OCENA_MUZYKA)      * (SELECT WAGA_MUZYKA       FROM USERS WHERE LOGIN = '$login_wziety_z_sesji')) /5,2),
          ROUND((AVG ( OCENA_SMAK)        * (SELECT WAGA_JEDZENIA     FROM USERS WHERE LOGIN = '$login_wziety_z_sesji')) /5,2),
          ROUND((AVG (OCENA_ROZNORODNOSC) * (SELECT WAGA_ROZNORODNOSC FROM USERS WHERE LOGIN = '$login_wziety_z_sesji')) /5,2),
          ROUND((AVG (OCENA_CENA)         * (SELECT WAGA_CENA         FROM USERS WHERE LOGIN = '$login_wziety_z_sesji')) /5,2),
          ROUND((
          (AVG ( OCENA_WYSTROJ)     * (SELECT WAGA_WYSTROJ      FROM USERS WHERE LOGIN = '$login_wziety_z_sesji') /5)+
          (AVG ( OCENA_MUZYKA)      * (SELECT WAGA_MUZYKA       FROM USERS WHERE LOGIN = '$login_wziety_z_sesji') /5)+
          (AVG ( OCENA_SMAK)        * (SELECT WAGA_JEDZENIA     FROM USERS WHERE LOGIN = '$login_wziety_z_sesji') /5)+
          (AVG (OCENA_ROZNORODNOSC) * (SELECT WAGA_ROZNORODNOSC FROM USERS WHERE LOGIN = '$login_wziety_z_sesji') /5)+
          (AVG (OCENA_CENA)         * (SELECT WAGA_CENA         FROM USERS WHERE LOGIN = '$login_wziety_z_sesji') /5) 
           )
          /
          5,2)            FROM OCENY INNER JOIN PUNKTY ON OCENY.ID_PG = PUNKTY.ID GROUP BY ID_PG;");
        $zapytanie_o_srednie->execute();
          
        $zapytanie_o_wagi = $conn->prepare("SELECT
                                           WAGA_WYSTROJ,
                                           WAGA_MUZYKA,
                                           WAGA_JEDZENIA,
                                           WAGA_ROZNORODNOSC,
                                           WAGA_CENA
                                           FROM USERS WHERE LOGIN  = '$login_wziety_z_sesji';");
       $zapytanie_o_wagi->execute();
       $wagi = $zapytanie_o_wagi->fetch(PDO::FETCH_ASSOC);
       while (list($key, $value) = each($wagi))
       {
           
           
           
           if( $key == "WAGA_WYSTROJ")
           {
               $_SESSION["waga_wystroj"] = intval($value);
           }
           
           if( $key == "WAGA_MUZYKA")
           {
               $_SESSION["waga_muzyka"] = intval($value);
           }
           
           if( $key == "WAGA_JEDZENIA")
           {
               $_SESSION["waga_jedzenia"] = intval($value);
           }
           
           if( $key == "WAGA_ROZNORODNOSC")
           {
               $_SESSION["waga_roznorodnosc"] = intval($value);
           }
           
           if( $key == "WAGA_CENA")
           {
               $_SESSION["waga_cena"] = intval($value);
           }
       
       
       }
       

       echo "<center>";
       echo "<table style='border: solid 1px black;'>";
                                           echo "<tr><th>Nazwa</th>
                                           <th>Miasto</th>
                                           <th>Ulica</th>
                                           <th >numer domu</th>
                                           <th>średnia ocena wystroju</th>
                                           <th>średnia ocena muzyki</th>
                                           <th>średnia ocena smaku</th>
                                           <th>średnia ocena różnorodności</th>
                                           <th>średnia ocena ceny</th>
                                           <th rowspan=\"2\">ostateczna średnia</th>
                                           <!--<th>personalne wagi</th>--></tr>";
       echo "<tr><th>wagi: $login_wziety_z_sesji</th>
                                           <th></th>
                                           <th></th>
                                           <th></th>
                                           <th class = \"blue\">".$_SESSION["waga_wystroj"]."</th>
                                           <th class = \"blue\">".$_SESSION["waga_muzyka"]."</th>
                                           <th class = \"blue\">".$_SESSION["waga_jedzenia"]."</th>
                                           <th class = \"blue\">".$_SESSION["waga_roznorodnosc"]."</th>
                                           <th class = \"blue\">".$_SESSION["waga_cena"]."</th>
                                           </tr>";
       
       
       echo "</center>";

       
       // set the resulting array to associative
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
echo "</div>";
echo "</div>";

