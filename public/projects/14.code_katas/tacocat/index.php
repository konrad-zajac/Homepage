<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konrad Zając - tacocat</title>
    <link href="style.css" rel="stylesheet">
    <link href="../css/style_fontow.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?

if (isset($_POST["phrase"]))
{

    $str = $_POST["phrase"];
    $str1 = strtolower($str);
    $str2 = str_replace('.', '', $str1);
    $str3 = str_replace(' ', '', $str2);
    $str4 = str_replace('\'', '', $str3);
    $odw = strrev($str4);

    if ($str4 == $odw)
    {
        echo "<h1 style='margin-left: 30%'>the phrase $str is a palindrome</h1>";
    }
    else
    {
        echo "<h1 style='margin-left: 30%'>the phrase $str is not a palindrome</h1>";
    }
}
?>
<body>
<!--Invisible Box -->
<div class=box>
    <!-- Circle and text-->
    <div class="circle"></div>
    <h1 style="font-family: 'Bavro pro'">TacoCat</h1>
    <h2 style="font-family: 'Bavro pro'">A palindrome</h2>
    <!-- End circle and text -->

    <div class="taco"></div>

    <!-- Cat features-->
    <div class="left-ear"></div>
    <div class="right-ear"></div>
    <div class="left-eye"><div class="pupil"></div></div>
    <div class="right-eye"><div class="pupil"></div></div>
    <div class="nose"></div>
    <!-- End cat features -->

    <!-- Whiskers -->
    <div class="left-whisker1"></div>
    <div class="left-whisker2"></div>
    <div class="left-whisker3"></div>
    <div class="right-whisker1"></div>
    <div class="right-whisker2"></div>
    <div class="right-whisker3"></div>
    <!-- End Whiskers -->

    <!-- Taco Fillings -->
    <div class="meat1"></div>
    <div class="meat2"></div>
    <div class="meat3"></div>
    <div class="lettuce1"></div>
    <div class="lettuce2"></div>
    <div class="lettuce3"></div>
    <div class="tomato1"></div>
    <div class="tomato2"></div>
    <!-- End Taco Fillings -->

</div> <!-- End box -->
<div class="container" >
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="phrase">Phrase</label>
            <input type="phrase" name="phrase" class="form-control" id="phrase" placeholder="Enter phrase">
        </div>
        <button style="margin-left: 40%" type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>