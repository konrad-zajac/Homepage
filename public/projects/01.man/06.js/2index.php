<?php
echo "<!DOCTYPE HTML>";
echo "<html lang='pl'>";

echo "<head>";
    echo "<link rel=\"stylesheet\" href=\"style.css\">";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">";
    echo "<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js\"></script>";
    echo "<script src=\"https://code.jquery.com/jquery-3.1.0.min.js\"></script>";
echo "</head>";

echo "<meta charset=\"utf8\">";
echo "<body ng-app=\"\">";
?>

<script>
 $(document).ready(function() {
        });
    var tab = 0;
    console.log("tab po zerowaniu = " + tab);
</script>

<?php

    echo "<div id='tytulowy_div_ten_z_napisem_konrad_zajac'>";
    
             echo "<h1
             class='napis caly_napis_Konrad_Zając'
             id='napis_Konrad'>
             Konrad
             </h1>";
             
         echo "<h1
             class='napis caly_napis_Konrad_Zając'
             id='napis_Zajac'>
             Zając
             </h1>";
    echo "</div>";

    echo "<div id='div_moje_projekty'>";
         echo "<h1  class='napis'
             id='napis_Moje_Projekty'>
             Moje projekty
             </h1>";
echo "</div>";

if (!isset($_POST["tab"]))
{
$_POST["tab"] = 0;
}
?>

<script>
var tab = parseInt('<?php echo $_POST["tab"] ?>');
if  (typeof(tab) == "number")
{
    console.log("Zmienna tab jest typu liczbowego.");
}
console.log("tab ktory przyszedl z posta = " + tab);
</script>
<?php
var_dump($_POST["tab"]);
?>


    <ul id="projekt_buttony" class="nav nav-pills">

        <li
        id="b_dow"
        class="btn btn-lg btn-warning"
        ng-click="tab = 1"
        ng-class="{ active: tab === 1 }">
        Download
        </li>

        <li
        id="b_bmi"
        class="btn btn-lg btn-warning"
        href
        ng-click="tab = 2"
        ng-class="{ active: tab === 2 }">
        BMI
        </li>

        <li
        id="b_inzynierka"
        class="btn btn-lg btn-warning"
        href ng-click="tab = 3"
        ng-class="{ active: tab === 3 }">Praca Inzynierska</li>


        <li
        id="b_palindrom"
        class="btn btn-lg btn-warning"
        href ng-click="tab = 4"
        ng-class="{ active: tab === 4 }">Palindrom</li>

    </ul>




<?php
    echo "</div>";
?>
<section ng-init=' <?php echo $_POST["tab"] ?>' class="tab">
    <ul>
        <div
        class="panel"
        ng-show="tab === 1">

         <ng-include
        src="'0.downloads/index.php'">
        </ng-include>

        </div>

        <div
        class="panel"
        ng-show="tab === 2">
        <ng-include
        src="'1.bmi/index.php'">
        </ng-include>
        </div>

        <div class="panel" ng-show="tab === 3">
            <ng-include src="'2.inz/wstep_do_inz.php'"></ng-include>
        </div>


        <div class="panel" ng-show="tab === 4">
            <ng-include src="'4.palindrome/index.php'"></ng-include>
        </div>
    </ul>

</section>

<?
echo "</body>";
