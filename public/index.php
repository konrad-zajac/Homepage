<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#33bb9c"/>
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Web Developer - Freelancer  </title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/style_carousel.css" rel="stylesheet">
      <link rel="stylesheet" href="colorbox.css"> -->
    <!-- <script src="jquery.min.js"></script> -->
    <!-- <script src="jquery.colorbox-min.js"></script>
     <script>
      jQuery(document).ready(function () {
        jQuery('a.gallery').colorbox({ opacity:0.5 , rel:'group1' });
      });
    </script> -->
    <link rel="manifest" href="/manifest.json">
    <!-- Custom Fonts -->
        <link href="css/style_fontow.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Montsert|Raleway|ato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="">
            <link href="css/style_opisu.css" rel="stylesheet">

</head>
<body id="page-top" class="index">
    <!-- Navigation -->

    <!-- Header -->
    <div id="root">
    </div>
    <div>

    <?  require 'section_navigation.php'; ?>

    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img id="picture of me"
                         alt="alt picture of me"
                         width="300px"
                         height="300px"
                         class="img-responsive img-rounded img-circle"
                         src="src/img/jpg/profile.jpg" >
                    <div class="intro-text">
                        <h1 title="name" role="name" aria-labelledby="name" class="portf name" style="letter-spacing: 8px; font-family:'Caveat';" >Konrad Zając</h1>
                        <hr class="star-light">
                        <span style="font-size:2.75em;font-family: Bavro" class="skills" >Web Developer - Freelancer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section style="padding-top: 2%;" id="portfolio">
    <? require 'section_portfolio_MIN.php';  ?>
    </section>
    <!-- About Section -->
    <section class="success o_mnie" id="about">

        <div class=' container-fluid'>
            <div class='row'>
                 <div class='col-lg-12 text-center'>
                    <h2 class='portf'>About</h2>
                    <hr class='star-light'>
                </div>
            </div>
        </div>
 <div class='container-fluid'><div class='row text-center'>
<div style='font-size: 2vw; font-family: Bavro' class=' col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 col-sm-offset-2 col-xs-12  '>
My Name is Konrad Zając.</br>
I am a graduate with a MSc degree in IT.
I would describe myself as a determined person (my education might confirm it),
who also is able work efficiently in a group  (it was required to complete the studies),
and willing to learn new technologies (my applications might confirm that).
</div></div></div>
    </section>
    <!-- certificates Section -->
    <section id='certificates'>
    <? require 'section_certificates_MIN.php';?>
   </section>
    <!-- references Section -->
    <section class="success" id="references">
    <? require 'section_references.php';?>
    </section>
    <!-- Contact Section -->
    <section id='contact'>

        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='portf'>Contact Me</h2>
                    <hr class='star-primary'>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2'>
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name='sentMessage' id='contactForm' novalidate>
                        <div class='row control-group'>
                            <div class='form-group col-xs-12 floating-label-form-group controls'>
                                <label>Name</label>
                                <input type='text' class='form-control' placeholder='Name' id='name' required data-validation-required-message='Please enter your name.'>
                                <p class='help-block text-danger'></p>
                            </div>
                        </div>
                        <div class='row control-group'>
                            <div class='form-group col-xs-12 floating-label-form-group controls'>
                                <label>Email Address</label>
                                <input type='email' class='form-control' placeholder='Email Address' id='email' required data-validation-required-message='Please enter your email address.'>
                                <p class='help-block text-danger'></p>
                            </div>
                        </div>
                        <div class='row control-group'>
                            <div class='form-group col-xs-12 floating-label-form-group controls'>
                                <label>Phone Number</label>
                                <input type='tel' class='form-control' placeholder='Phone Number' id='phone' required data-validation-required-message='Please enter your phone number.'>
                                <p class='help-block text-danger'></p>
                            </div>
                        </div>
                        <div class='row control-group'>
                            <div class='form-group col-xs-12 floating-label-form-group controls'>
                                <label>Message</label>
                                <textarea rows='5' class='form-control' placeholder='Message' id='message' required data-validation-required-message='Please enter a message.'></textarea>
                                <p class='help-block text-danger'></p>
                            </div>
                        </div>
                        <br>
                        <div id='success'></div>
                        <div class='row'>
                            <div class='form-group col-xs-12'>
                                <button type='submit' class='btn btn-success btn-lg'>Send</button>
<a download href='src/1.documents/2.CV/CV_Konrad_Zajac.pl.texpdf.pdf' class='btn btn-info btn-lg'style='float:right'> CV</a>
                            </div>
                        </div>
                    </form>

                                <?
                </div>
            </div>
        </div>
    <? require 'section_contact.php';?>
   </section>
    <? require 'section_footer.php';?>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- Portfolio Modals -->
    <? require 'section_certificates_MAX.php';?>
<!--MAX_MT-->
<div class="portfolio-modal modal fade" id="portfolioModal_c1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                                <img src="src/img/jpg/c1.jpg" class="img-responsive img-centered" alt="">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--MAX_MT-->
<!--MAX_MT-->
    <div class="portfolio-modal modal fade" id="portfolioModal_mt" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Master's thesis</h2>

                            <a href="projects/08.praca_magisterska/index.php">
                                <img src="src/img/portfolio/mag.png" class="img-responsive img-centered" alt="">
                            </a>
                            <p>
                                This is the work for my Master's thesis - it consist of multiple tests, which aim is to interpret how a typical person interacts with a website.
                                 Its goal is to measure those interactions and define the best practices for web developers.
                             </br>
                             </br>
                                 It was done with the use of following technologies:
                             </br>
                             - HTML
                             </br>
                             - CSS
                             </br>
                             - Bootstrap
                             </br>
                             - jQuery
                                    <div class="btn-group">
                                        <a href="projects/08.praca_magisterska/index.php" >
                                            <button type="button" class="btn btn-default">internet application</button>
                                        </a>
                                        <a href="projects/07.downloads/magisterka.zip" >
                                    <button type="button" class="btn btn-default">text [PL]</button>
                                    </a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--MAX_BMI-->
    <div class="portfolio-modal modal fade" id="portfolioModal_bmi" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Bmi</h2>

                            <a href="projects/10.bmi/index.php">
                                <img src="src/img/portfolio/bmi.png" class="img-responsive img-centered" alt="">
                            </a>
                            <p>This a site calculates the body mass index ratio, and it has a functionality that shows you how much you can gain or loss weight.</p>
                            <div class="btn-group" style="margin-top: 5%">
                                <a href="projects/10.bmi/index.php" class="btn btn-default">BMI</a>
                        </div>
                    </br>

                                 It was done with the use of following technologies:
                             </br>
                             - HTML
                             </br>
                             - CSS
                             </br>
                             - Bootstrap
                             </br>
                             - PHP
                              </br>

                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
     <!--MAX_ET-->
    <div class="portfolio-modal modal fade" id="portfolioModal_et" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Engineer's Thesis</h2>

                            </div>
                                <img
                                     height="300"
                                     widh="217"
                                     border="0"
                                     src="src/img/portfolio/F2/logo.png"/>
                                    <div id="images">
                                <a href="https://github.com/konrad-zajac/f00dstr" class="portfolio-link" data-toggle="modal" class="portfolio-link" >
                                    <button type="button" class="btn btn-default">f<span style="font-family: 'AHAMONO'">00</span>dstr</button>
                                </a>
                            <p class="portfolio_img" style="font-size: 2vw;">
                                This is a second version of the application i required for me to become an engineer.
                                The previous version was written in plain PHP with use of HTML, jQuery and MySQL, it worked but it was inefficient
                                - so now I'm redoing it with the laravel framework(v.5.5.3).
                                The current state of the application is availible at my GitHub page https://github.com/konrad-zajac/f00dstr.git
                                It's a gastronomic app, helping users to choose a restaurant - also it aids restaurants by giving them feedback (which is important in many ways).
                                </p>
                            <img src="src/img/portfolio/F2/1.jpeg" class="img-rounded"  width="304" height="236">
                            <img src="src/img/portfolio/F2/2.jpeg" class="img-rounded"  width="304" height="236">
                            <img src="src/img/portfolio/F2/3.jpeg" class="img-rounded"  width="304" height="236">
                            <img src="src/img/portfolio/F2/4.jpeg" class="img-rounded"  width="304" height="236">
                            <img src="src/img/portfolio/F2/5.jpeg" class="img-rounded"  width="304" height="236">
                            <img src="src/img/portfolio/F2/6.jpeg" class="img-rounded"  width="304" height="236">
                            <li>Date:
                                        <strong>>March 2016</a>
                                        </strong>
                                    </li>
                                    <div class="btn-group">
                                        <a href="projects/03.inz/intro.html"><button type="button" class="btn btn-default" ><i class="glyphicon glyphicon-info-sign"></i>More info...</button><a/>
                                        <a href="projects/03.inz/inzynierka.pdf"><button type="button" class="btn btn-default" >Written work [PL]</button><a/>
                                    </div>
                                </br>

						</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!--MAX_PRI-->
    <div class="portfolio-modal modal fade" id="portfolioModal_prime" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Prime numbers</h2>

                            <a href="projects/04.prime/index.php">
                                <img src="src/img/portfolio/prime.png" class="img-responsive img-centered" alt="">
                            </a>
                                <? require 'opis_prime.php';?>

                               <div class="btn-group">
                                        <a href="projects/04.prime/alg/index.php"><button type="button" class="btn btn-default" ></i>The algorithm</button><a/>
                                        <a href="projects/04.prime/index.en.php"><button type="button" class="btn btn-default" >Tests</button><a/>
                                    </div>
                                </br>

                                      <div class="row">
            <div class="col-12 text-center">
                  <h3>Implementation</h3>
        <div class="row">
            <div class="col-12 text-center">
                <div class="btn-group"         style="margin-top: 5%">
                    <a href="projects/04.prime/sh_prime.zip" class="btn btn-default">Bash</a>
                    <a href="projects/04.prime/c_prime.zip" class="btn btn-default">C</a>
                    <a href="projects/04.prime/cpp_prime.zip" class="btn btn-default">C++</a>
                    <a href="projects/04.prime/java_prime.zip" class="btn btn-default">Java</a>
                    <a href="projects/04.prime/php_prime/index.php" class="btn btn-default">PHP</a>
                    <a href="projects/04.prime/python_prime.zip" class="btn btn-default">Python</a>
                    <a href="projects/04.prime/ruby_prime.zip" class="btn btn-default">Ruby</a>

                </div>
            </div>
        </div>
            </div>
        </div>
            </br>
                                 It was done with the use of following technologies:
                             </br>
                             - HTML
                             </br>
                             - CSS
                             </br>
                             - Bootstrap
                             </br>
                             - Bash
                             </br>
                             - C
                             </br>
                             - C++
                             </br>
                             - Java
                             </br>
                             - PHP
                             </br>
                             - Python
                             </br>
                             - Ruby

						</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAX_MAN-->
    <div class="portfolio-modal modal fade" id="portfolioModal_man" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Manual</h2>

                                <a href="projects/01.man/index.php">
                                <img src="src/img/portfolio/man.png" class="img-responsive img-centered" alt="">
                            </a>
                                <? require 'opis_man.en.php';?>
                                </br>
                                <a href="projects/01.man/index.php">
                                <button type="button" class="btn btn-default" >Manual</button>
                                </a>
                            </br>
                                <button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAX_TAC-->
    <div class="portfolio-modal modal fade" id="portfolioModal_tacocat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Tacocat</h2>

                            <a href="projects/05.tacocat/index.php">
                                <img src="src/img/portfolio/taco.jpg" class="img-responsive img-centered" alt="">
                            </a>
                                <? require 'opis_tacocat.php';?>
                                <a href="projects/05.tacocat/index.php">
                                <button type="button" class="btn btn-default" >tacocat</button>
                                </a>
                            </br>
                                <button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!--MAX_DOW-->
    <div class="portfolio-modal modal fade" id="portfolioModal_dow" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Downloads</h2>

                            <a href="projects/07.downloads/index.php"> <img src="src/img/portfolio/dow.png" class="img-responsive img-centered" alt=""></a>

                            <a href="projects/07.downloads/index.php" class="portfolio-link" data-toggle="modal" class="portfolio-link" >
                                <button href="projects/07.downloads/index.php" type="button" class="btn btn-default">downloads</button>
                            </a>
                                <p>This file contains the implementation of a few useful functions, like modifying many file names at once, or manipulating images (usiing image magick).</p>
                          </br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--MAX_MP-->
    <div class="portfolio-modal modal fade" id="portfolioModal_mp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Mouse position</h2>

                            <a href="projects/02.mouse_pos/index.html">
                                <img src="src/img/portfolio/mp.png" class="img-responsive img-centered" alt="">
                            </a>
                            <p>This is a site that shows what actions can be done using vanilla (plain) JavaScript.
                            In this case there are elements added to a html relative to the the mouse pointer.</p>
                           </br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--MAX_FIB-->
    <div class="portfolio-modal modal fade" id="portfolioModal_fib" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Fibonacci Sequence</h2>

                            <a href="projects/12.fibonacci/index.html">
                                <img src="src/img/portfolio/fib.png" class="img-responsive img-centered" alt="">
                            </a>
                            <? require 'opis_fibonacci.php';?>
                            <div class="btn-group" style="margin-top: 5%">
                                <a href="projects/12.fibonacci/index.html" class="btn btn-default">Fibonacci</a>
                            </div>
                        </div>

                                 It was done with the use of following technologies:
                             </br>
                             - HTML
                             </br>
                             - CSS
                             </br>
                             - Bootstrap
                             </br>
                             - PHP
                           	</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--MAX_WCAG-->
    <div class="portfolio-modal modal fade" id="portfolioModal_wcag" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>WCAG</h2>
                            <hr class="star-primar">
                            <a href="projects/13.wcag/index.html">
                                <img src="src/img/portfolio/wcag.png" class="img-responsive img-centered" alt="">
                            </a>
                            <? require 'opis_wcag.en.php';?>
                            <div class="row">
            <div class="col-12 text-center">
                <div class="btn-group"         style="margin-top: 5%">
                    <a href="projects/13.wcag/index.html" class="btn btn-default">accessibility & WCAG 2.0 </a>
                </div>
            </div>
        </div>
                        </div>
						</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--MAX_RGB-->
     <div class="portfolio-modal modal fade" id="portfolioModal_rgb" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>rgb</h2>

                <a href="projects/11.kolory/index.html">
                    <img src="src/img/portfolio/rgb.png" class="img-responsive img-centered" alt="">
                </a>
                        </div>
                        This project is about showcasing the flexibility of the VI editor.
						</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAX_PIQ-->
    <div class="portfolio-modal modal fade" id="portfolioModal_piq" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Pluralsight IQ</h2>

                <a href="projects/15.Piq/index.en.html">
                    <img src="src/img/portfolio/Pluralsight/piq1.png" class="img-responsive img-centered" alt="">
                </a>
                        </div>
                        <p>
            <a href="www.pluralsight.com">Pluralsight</a> is  a site for lerning code and also there are tests the skill in programing in an application called <a href="https://www.pluralsight.com/product/pluralsight-iq">PluralsightIQ</a> .
                        <div class="btn-group" style="margin-top: 5%">
                                <a href="projects/15.Piq/index.en.html" class="btn btn-default">Pluralsight IQ</a>
                            </div>
						</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!--MAX_CKA-->
     <div class="portfolio-modal modal fade" id="portfolioModal_code_kata" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Code katas</h2>

                <a href="projects/14.code_katas/index.en.html">
                    <img src="src/img/portfolio/code_kata.png" class="img-responsive img-centered" alt="">
                </a>
                        </div>
                        <p>
                        The term kata on wikipedia is defined as "Kata (型 or 形 literally: "form"), a Japanese word, are detailed choreographed patterns of movements practiced either solo or in pairs.
                         The term form is used for the corresponding concept in non-Japanese martial arts in general."
                     It is a term that came from martial arts, but they also can be applied to programming - one does perfect the act of coding while doing those tasks.</p>
                        <div class="btn-group" style="margin-top: 5%">
                                <a href="projects/14.code_katas/index.en.html" class="btn btn-default">Code katas</a>
                            </div>
						</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAX_BG-->
    <div class="portfolio-modal modal fade" id="portfolioModal_bg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Binary gap </h2>

                            <a href="projects/06.binary_gap/index.php">
                                <img src="src/img/portfolio/bg.png" class="img-responsive img-centered" alt="">
                            </a>
                            <p>This is a php application that counts the longest binary gap.</br>Binary gap is a concept in numbers converted to only ones and zeros, i.e. the digit 5 converted to binary is 101 there is only one binary gap here and it has a length of one, if we take a second number 18 in binary it is 01001 - that number has two binary gaps. The first one (single digit on the left side) has a length of one, and the second binary gap is the double zero on the right which has a length of two and is the biggest binary gap in the whole number. </p>
                            <div class='btn-group' style='margin-top: 5%'> <a href='projects/06.binary_gap/index.php' class='btn btn-default'>Binary gap [full version]</a> <a href='src/3.downloads/b_gap.php.zip' class='btn btn-default'>Binary gap [PHP function]</a> </br> </div></br>

						</br><button type='button' style='margin-top: 2%' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
      <script src="js/js.js" type="text/babel"></script>
    <!-- <script src="js/carousel.js"></script>
<script>
  jQuery('a.gallery').colorbox();
</script> -->

</body>
</html>
