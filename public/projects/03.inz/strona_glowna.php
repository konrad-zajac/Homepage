
<?php
if (!isset($_SESSION["flaga_zalogowania"]))
{
$_SESSION["flaga_zalogowania"] = 0;
}
if (!isset($_SESSION["flaga_admina"]))
{
$_SESSION["flaga_admina"] = 0;
}
?>
<script>
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<?


    //HEADER###################################################################################################
    echo "<header id='top' class='header'>";
        echo "<div class='text-vertical-center'>";
            echo "<h1 id='napis_main1'  class='tytul'>F <span id='napis_main2'>00</span>dstr</h1>";
            echo "<h3 class='tytul' style='font-size: 600%'><i>''For people who love food a <span style='font-family: PT Mono;    color: #00a644;'>100%</span>''</i></h3>";
            echo "<br>";
            echo "<a href='#about' class='btn btn-dark btn-slg'>START</a>";
        echo "</div>";
    echo "</header>";
    //HEADER####################################################################################################


    echo "<section id='about' class='about'>";
    echo "<div class='container'>";
    echo "<div class='row'>";

    echo " </div>";
    echo " </div>";
    echo "</section>";


    echo "<div class='row'>";
    echo "<h1></br></h1>";
    echo " </div>";

    //NAPIS########################################################################################################################
    echo "<aside class='callout'>";
        echo "<div class='text-vertical-center'>";
            echo "<h2 class='podtytul'>";
                echo "<font size='7'>This application will<b>HELP</b> in choosing a restaurant point,";
                echo "</br>";
                echo "and <b>ASSIST</b> on deciding about the next";
            echo "</h2>";
        echo "</div>";
    echo "</aside>";
    //NAPIS########################################################################################################################

    //STAN ZALOGOWANIA O########################################################################################################################
    echo "<section>";
        echo "<div class='row'>";
            echo "<div  style='float:left;' class='container'>";
                echo "<form class='Form' action='#?podstrona=glowna' method='POST'>";
                if ($_SESSION["flaga_zalogowania"] === 1)
                    {
                    echo "<h1>logged in as ".$_SESSION["sesyjny_login"]."</h1>";

            //PRZYCISK------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                            echo "<button 
                                    type='submit'
                                    name='wbutton'
                                      style = 'height: 80px; width:180px; font-size: xx-large'
                                       class='btn-danger'>
                                       log out
                                       </button>";
            //PRZYCISK------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                    }
                else
                {
                echo "<h2>Login</h2>";

                    //LOGIN----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                echo "<input class='zmniejszacz'type='text'  placeholder='login' name='login' >";
                echo "</br>";
                    //LOGIN-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                    //HASLO-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                echo "<input 
                            class='zmniejszacz'
                            type='password'
                            placeholder='password' 
                            name='password'>";
                echo "</br>";
                echo "</br>";
                    //HASLO-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                    //PRZYCISK---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                echo "<button name='button' value='button_pressed' style = 'height: 80px; width:180px; font-size: xx-large' class='btn btn-primary'  type='submit' >login</button>";
                    //PRZYCISK---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                }

                echo "</form>";
            echo "</div>";
        echo "</div>";
    echo "</section>";
    //STAN ZALOGOWANIA O########################################################################################################################

        echo "</br>";


    //########################################################################################################################
    //aside o---------------------------------------------------------------------------
    echo "<aside style = 'border: 0px solid red'class='call-to-action bg-primary tlo'>";
    //contener o---------------------------------------------------------------------------
        echo"<div class='container'>";
    //row o---------------------------------------------------------------------------
            echo "<div class='row'>";
                echo" <div class='col-lg-12 col-xL-12 text-center'>";
                     echo "<div class='btn-group'>";

                    //POZIOM 0 ZAWSZE WIDOCZNE---------------------------------------------------------------------------
                    echo "<a
                            href='funkcjonalnosci/0.UWAGA/dodawanie_uwagi.php'
                             class='btn btn-lg btn-success mar'>

                                <i class='glyphicon glyphicon-warning-sign mar'>
                                </i>

                                <b class='rozmiar_buttonow_na_froncie'>
                                    uwaga
                                </b>

                            </a>";
                    if($_SESSION["flaga_zalogowania"] === 1)
                    {
                        echo "<a
                                 href='index.php?podstrona=przegladanie'
                                 style = ' width: 300px'
                                class='btn btn-lg btn-warning smar '>
                                <i class='glyphicon glyphicon-th-list '></i>
                                 <b class='rozmiar_buttonow_na_froncie' >Browsing++</b></a>";
                    }
                    else
                    {
                        echo " <a href='index.php?podstrona=przegladanie'
                                style = 'width: 300px'
                                class='btn btn-lg btn-success'>

                                    <i class='glyphicon glyphicon-th-list smar'>
                                    </i>

                                    <b class='rozmiar_buttonow_na_froncie'>Browsing--
                                    </b>

                                </a>";

                        echo "<a
                                href='index.php?podstrona=dodawanie_uzytkownika'
                                class='btn btn-lg btn-success'>

                                    <i class='glyphicon glyphicon-plus mar'>
                                    </i>

                                    <b class='rozmiar_buttonow_na_froncie'
                                        >
                                        Register
                                    </b>

                                </a>";
                    }
                    //POZIOM 0 ZAWSZE WIDOCZNE---------------------------------------------------------------------------

                    //POZIOM 1 WIDOCZNE PO ZALOGOWANIU---------------------------------------------------------------------------
                    if($_SESSION["flaga_zalogowania"] === 1)
                    {
 echo "<a href='index.php?podstrona=dodawanie_oceny'

            class='btn btn-lg btn-warning mar'>
            <i class=' size_fontow_buttonow glyphicon glyphicon-star '>
            </i> <b style = 'font-size: 30px ;'> Ocena </b></a>";                    }
                    //POZIOM 1 WIDOCZNE PO ZALOGOWANIU---------------------------------------------------------------------------

                    //POZIOM 2 WIDOCZNE PO ZALOGOWANIU ADMINA---------------------------------------------------------------------------
                    if($_SESSION["flaga_admina"] === 1)
                    {
                        echo  "<a href='funkcjonalnosci/usuwanie.php'
                                 style = 'height: 62px ;'
                                  class='btn btn-lg btn-danger'>
                                  <i class='glyphicon glyphicon-trash mar'>
                                  </i>
                                  <b style = 'font-size: 30px ;'>
                                  Usuwanie</b></a>";  echo "<a href='index.php?podstrona=dodawanie_punktu' class='btn btn-lg btn-danger'><i class='glyphicon glyphicon-plus mar'></i><b style = 'font-size: 30px ;'>Add a place</b></a>";
                    }
                    //POZIOM 2 WIDOCZNE PO ZALOGOWANIU ADMINA---------------------------------------------------------------------------


                //LINKI ŚRODEK------------------------------------------------------------------------------------>
                echo "</div>";
    //row z---------------------------------------------------------------------------
            echo "</div>";
    //contener z---------------------------------------------------------------------------
        echo "</div>";
    //aside z---------------------------------------------------------------------------
    echo " </aside>";

    //TEN BIAŁY PASEK MIĘDZY PRZYCISKAMI A POLECANYMI O########################################################################################################################
    echo "<section id='about' class='about'>";
        echo "<div class='container'>";
            echo "<div class='row'>";
                echo "<div class='col-lg-12 text-center'>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</section>";
    //TEN BIAŁY PASEK MIĘDZY PRZYCISKAMI A POLECANYMI Z########################################################################################################################

    //POLECANE O########################################################################################################################
    echo "<section id='portfolio' class='portfolio'>";
        echo "<div class='container'>";
            echo "<div class='row'>";
                echo "<div class='col-lg-10 col-lg-offset-1 text-center'>";
                echo "<h2>Polecane punkty</h2>";
                echo "<hr class='small'>";
    //Boliwka O--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        echo "<div   class='col-md-6'>";
            echo "<div class='portfolio-item'>";
                echo "<img class='img-portfolio img-responsive' src='img/portfolio-1.jpg'>";
                echo "</a> ";
            echo "</div>";
        echo "</div>";
    //Boliwka Z--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //DRUGI O--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        echo "<div  class='col-md-6'>";
            echo "<div class='portfolio-item'>";
        echo "<img class='img-portfolio img-responsive' src='img/portfolio-2.jpg'>";
                echo "</a> ";
            echo "</div>";
        echo "</div>";
    //DRUGI Z--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //TRZECI O--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        echo "<div  class='col-md-6'>";
            echo "<div class='portfolio-item'>";
                echo "<img class='img-portfolio img-responsive' src='img/portfolio-3.jpg'>";
                echo "</a> ";
            echo "</div>";
        echo "</div>";
    //TRZECI Z--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //CZWARTY O--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        echo "<div class='col-md-6'>";
            echo "<div class='portfolio-item'>";
                echo "<img class='img-portfolio img-responsive' src='img/portfolio-4.jpg' ";
                echo "</a>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    //CZWARTY Z--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

            echo "</div>";
        echo "</div>";
    echo "</section>";
echo "</body>";



