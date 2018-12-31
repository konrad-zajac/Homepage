<?php
require 'functions.php';
$results = get_results();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Konrad Zając - Prime numbers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/style_prime_exp.css" rel="stylesheet">

</head>

<div class="container-fluid jumbotron text-center" style="padding: 0;margin:0">
<h1 style="margin-top: 0">Prime number</h1>
</div>

<body>
		<div class="row">
            <div class="col-12 text-center">
                <div class="btn-group" style="margin-top: 5%">
                    <a href="sh_prime.zip" class="btn btn-default">Bash</a>
                    <a href="c_prime.zip" class="btn btn-default">C</a>
                    <a href="cpp_prime.zip" class="btn btn-default">C++</a>
                    <a href="java_prime.zip" class="btn btn-default">Java</a>
                    <a href="java_prime.zip" class="btn btn-default">Java</a>
                    <a href="php_prime/index.php" class="btn btn-default">PHP</a>
                    <a href="python_prime.zip" class="btn btn-default">Python</a>
                    <a href="ruby_prime.zip" class="btn btn-default">Ruby</a>
                </div>
            </div>
		</div>
<?php
echo"<div class='container-fluid'>";
echo"<div class='row' ";
echo"<div class='col-sm-2'>";
echo'</div>';
echo"<div class='col-sm-4'>";
                echo " <table style='margin-top:5%' class=\"table text-center table-bordered\">";
                echo " <tr style='text-align:center'>";
                echo '<th>subtest</th>';
                echo '<th>record</th>';
                echo ' <th class="prime_text_size">C</th><th class="prime_text_size">C ++ </th><th class="prime_text_size">Java</th><th class="prime_text_size">PHP</th><th class="prime_text_size">Python</th class="prime_text_size"><th class="prime_text_size">Ruby</th></tr>';
                echo ' </tr>';
                echo '<tbody>';
                foreach ($results as $key => $result) {
                    if ($key === 0) {
                        echo "<td style='background: black; color: white' colspan='9'>";
                        echo "1'000</td>";
                    }
                    if (($key >= 0) and ($key <= 10)) {
                        echo ' <tr>';
                        echo '<td>' . $result['subtest'] . '</td>';
                        echo '<td>' . $result['record'] . '</td>';
                        echo '<td>' . $result['C'] . '</td>';
                        echo '<td>' . $result['C++'] . '</td>';
                        echo '<td>' . $result['Java'] . '</td>';
                        echo '<td>' . $result['PHP'] . '</td>';
                        echo '<td>' . $result['Python'] . '</td>';
                        echo '<td>' . $result['Ruby'] . '</td>';
                        echo '</tr>';
                    }
                }
                echo'</table>';
echo'</div>';
echo"<div class='col-sm-4' >";
echo'</br>';
echo"<div class='container-fluid'>";
echo"<div class='row'>";
echo"<div class='col-sm-12'>";
echo"<img class='prime_img' src='../../src/img/prime1000.jpg'></img>";
echo'</div>';
echo'</div>';
echo"<div class='row prime_legend_main'>";
echo'The picture above shows the comparison of six languages when preforming the task of calculating prime numbers,';
echo'each time the experiment was conducted the time was measured, as shown the C language is the most efficient.';
echo'C++ came close but in the fourth experiment there was a slight variation.';
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';
//row2
echo"<div class='row' ";
echo"<div class='col-sm-2'>";
echo'</div>';
echo"<div class='col-sm-4'>";

                echo " <table style='margin-top:5%' class=\"table text-center table-bordered\">";
                echo " <tr style='text-align:center'>";
                echo '<th>subtest</th>';
                echo '<th>record</th>';
                echo ' <th class="prime_text_size">C</th><th class="prime_text_size">C ++ </th><th class="prime_text_size">Java</th><th class="prime_text_size">PHP</th><th class="prime_text_size">Python</th class="prime_text_size"><th class="prime_text_size">Ruby</th></tr>';
                echo ' </tr>';
                echo '<tbody>';
                foreach ($results as $key => $result) {
                    if ($key === 11) {
                        echo "<td style='background: black; color: white' colspan='9'>";
                        echo "10'000</td>";
                    }
                    //if ($key === 0) {
                    //echo "<td style='background: black; color: white' colspan='9'>";
                    //echo "1'000</td>";
                    //}
                    if (($key >= 11) and ($key <= 21)) {
                        echo ' <tr>';
                        echo '<td>' . $result['subtest'] . '</td>';
                        echo '<td>' . $result['record'] . '</td>';
                        echo '<td>' . $result['C'] . '</td>';
                        echo '<td>' . $result['C++'] . '</td>';
                        echo '<td>' . $result['Java'] . '</td>';
                        echo '<td>' . $result['PHP'] . '</td>';
                        echo '<td>' . $result['Python'] . '</td>';
                        echo '<td>' . $result['Ruby'] . '</td>';
                        echo '</tr>';
                    }
                }
                echo'</table>';

echo'</div>';
echo"<div class='col-sm-4' >";
echo'</br>';
echo"<div class='row'>";

echo"<div class='col-sm-12'>";
echo"<img class='prime_img' src='../../src/img/prime1000.jpg'></img>";
echo'</div>';
echo'</div>';
echo"<div class='row prime_legend_main'>";
echo '[TODO]';
echo'</div>';

echo'</div>';
echo'</div>';
echo'</div>';
//row3
echo"<div class='row' ";
echo"<div class='col-sm-2'>";
echo'</div>';
echo"<div class='col-sm-4'>";

                echo " <table style='margin-top:5%' class=\"table text-center table-bordered\">";
                echo " <tr style='text-align:center'>";
                echo '<th>subtest</th>';
                echo '<th>record</th>';
                echo ' <th class="prime_text_size">C</th><th class="prime_text_size">C ++ </th><th class="prime_text_size">Java</th><th class="prime_text_size">PHP</th><th class="prime_text_size">Python</th class="prime_text_size"><th class="prime_text_size">Ruby</th></tr>';
                echo ' </tr>';
                echo '<tbody>';
                foreach ($results as $key => $result) {
                    if ($key === 22) {
                        echo "<td style='background: black; color: white' colspan='9'>";
                        echo "1'000</td>";
                    }
                    if (($key >= 22)) {
                        echo ' <tr>';
                        echo '<td>' . $result['subtest'] . '</td>';
                        echo '<td>' . $result['record'] . '</td>';
                        echo '<td>' . $result['C'] . '</td>';
                        echo '<td>' . $result['C++'] . '</td>';
                        echo '<td>' . $result['Java'] . '</td>';
                        echo '<td>' . $result['PHP'] . '</td>';
                        echo '<td>' . $result['Python'] . '</td>';
                        echo '<td>' . $result['Ruby'] . '</td>';
                        echo '</tr>';
                    }
                }
                echo'</table>';

echo'</div>';
echo"<div class='col-sm-4' >";
echo'</br>';
echo"<div class='row'>";

echo"<div class='col-sm-12'>";
echo"<img class='prime_img' src='../../src/img/prime1000.jpg'></img>";
echo'</div>';
echo'</div>';
echo"<div class='row prime_legend_main'>";
echo '[TODO]';
echo'</div>';

echo'</div>';
echo'</div>';
echo'</div>';
                ?>
<!--
<div class="row">
<div class="col-12 text-center">

<div class="col-sm-2">
</div>

<div class="col-sm-4">
<?php
        echo " <table style='margin-top:5%' class=\"table  table-bordered\">";
        echo " <tr style='text-align:center'>";
        echo '<th>subtest</th>';
        echo '<th>record</th>';
        echo ' <th>C</th><th>C ++ </th><th>Java</th><th>PHP</th><th>Python</th><th>Ruby</th></tr>';
        echo ' </tr>';
        echo '<tbody>';
        foreach ($results as $key => $result) {
            if ($key === 22) {
                echo "<td style='background: black; color: white' colspan='9'>";
                echo "100'000</td>";
            }

            if ($key >= 22) {
                echo ' <tr>';
                echo '<td>' . $result['subtest'] . '</td>';
                echo '<td>' . $result['record'] . '</td>';
                echo '<td>' . $result['C'] . '</td>';
                echo '<td>' . $result['C++'] . '</td>';
                echo '<td>' . $result['Java'] . '</td>';
                echo '<td>' . $result['PHP'] . '</td>';
                echo '<td>' . $result['Python'] . '</td>';
                echo '<td>' . $result['Ruby'] . '</td>';
                echo '</tr>';
            }
        }
        echo'</table>';
        ?>
</div>

<div class="col-sm-4">
</div>

</div>
</div>
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="center-block ">
</br>
<h2>This experiment was taken on a Computer with 4GHz processor.
     In the first test the C language was the fastest one, also it's worth noting that there are different types of languages in this test. Compiled languages are leading, (the C language had better results than C++ becouse it didn't vary from the 0,003 mean). In the second test the C language also proved to be the fastest but there were some fluctuations from the mean. The script written in bash is also correct, but this language was not built for aiding in big math calculations, so the results will be omitted.
</h2>
</div>
</div>
</div>
-->
</body>
</html>
