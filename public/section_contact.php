<?
echo "        <div class='container'>";
echo "            <div class='row'>";
echo "                <div class='col-lg-12 text-center'>";
echo "                    <h2 class='portf'>Contact Me</h2>";
echo "                    <hr class='star-primary'>";
echo "                </div>";
echo "            </div>";
echo "            <div class='row'>";
echo "                <div class='col-lg-8 col-lg-offset-2'>";
echo "                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->";
echo "                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->";
echo "                    <form name='sentMessage' id='contactForm' novalidate>";
echo "                        <div class='row control-group'>";
echo "                            <div class='form-group col-xs-12 floating-label-form-group controls'>";
echo "                                <label>Name</label>";
echo "                                <input type='text' class='form-control' placeholder='Name' id='name' required data-validation-required-message='Please enter your name.'>";
echo "                                <p class='help-block text-danger'></p>";
echo "                            </div>";
echo "                        </div>";
echo "                        <div class='row control-group'>";
echo "                            <div class='form-group col-xs-12 floating-label-form-group controls'>";
echo "                                <label>Email Address</label>";
echo "                                <input type='email' class='form-control' placeholder='Email Address' id='email' required data-validation-required-message='Please enter your email address.'>";
echo "                                <p class='help-block text-danger'></p>";
echo "                            </div>";
echo "                        </div>";
echo "                        <div class='row control-group'>";
echo "                            <div class='form-group col-xs-12 floating-label-form-group controls'>";
echo "                                <label>Phone Number</label>";
echo "                                <input type='tel' class='form-control' placeholder='Phone Number' id='phone' required data-validation-required-message='Please enter your phone number.'>";
echo "                                <p class='help-block text-danger'></p>";
echo "                            </div>";
echo "                        </div>";
echo "                        <div class='row control-group'>";
echo "                            <div class='form-group col-xs-12 floating-label-form-group controls'>";
echo "                                <label>Message</label>";
echo "                                <textarea rows='5' class='form-control' placeholder='Message' id='message' required data-validation-required-message='Please enter a message.'></textarea>";
echo "                                <p class='help-block text-danger'></p>";
echo "                            </div>";
echo "                        </div>";
echo "                        <br>";
echo "                        <div id='success'></div>";
echo "                        <div class='row'>";
echo "                            <div class='form-group col-xs-12'>";
echo "                                <button type='submit' class='btn btn-success btn-lg'>Send</button>";
echo "<a download href='src/1.documents/2.CV/CV_Konrad_Zajac.pl.texpdf.pdf' class='btn btn-info btn-lg'style='float:right'> CV</a> ";
echo "                            </div>";
echo "                        </div>";
echo "                    </form>";


?>

                                <?
echo "                </div>";
echo "            </div>";
echo "        </div>";
