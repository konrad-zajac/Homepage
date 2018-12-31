

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konrad Zając - Prime numbers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link href="../../../css/style.css" rel="stylesheet">

</head>

<div class="container-fluid jumbotron text-center" style="padding: 0;margin:0">
    <h1 style="margin-top: 0">Prime number</h1>
</div>
<body>
        <div class="row">
            <div class="col-12 text-center">
                <div class="btn-group"         style="margin-top: 5%">
                    <a href="../sh_prime.zip" class="btn btn-default">Bash</a>
                    <a href="../c_prime.zip" class="btn btn-default">C</a>
                    <a href="../cpp_prime.zip" class="btn btn-default">C++</a>
                    <a href="../java_prime.zip" class="btn btn-default">Java</a>
                    <a href="../java_prime.zip" class="btn btn-default">Java</a>
                    <a href="../php_prime/index.php" class="btn btn-default">PHP</a>
                    <a href="../python_prime.zip" class="btn btn-default">Python</a>
                    <a href="../ruby_prime.zip" class="btn btn-default">Ruby</a>
     
                </div>
            </div>
        </div>
     <div class="container">
        <div class="row">
            
            <p> The algorithm to determine prime numbers in a certain range  can be simply explained using pseudocode.
            In my implementation there are six main steps, if the algorithm should inform about the elapsed time there are three additional steps</p>
            
        </div>

</div>


        <div class="row">
            <div class="col-lg-8 col-lg-offset-3">
            <div class="center-block " >
                <table class="table-bordered">
                    <thead ">
                        <tr>
                            <td class="table_step">
                                Step
                            </td>

                           
                            <td>
                                Comment
                            </td>

                             <td class="prime_kod ">
                                Code
                            </td>
                            
                        </tr>
                        
                    </thead>
<!-- ==1============================== -->

                              <tr>
                                <td class="table_step">
                                    1
                                </td>
                            
                                <td>
                                The first step is to declare the five used variables.
                                </td>

                                <td class="prime_kod kod">
                                <code>
                                    ins_num,
                                </br>
                                is_divisible,
                                </br>
                                pot_div,
                                </br>
                                cheked_number = 2,
                                </br>
                                elapsed_secs;
                                </code>
                            </td>

                        </tr>
<!-- ==2============================== -->

                           <tr>
                            <td style="border-right: 0 " class="table_step">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0" >
                            
                            </td>

                            <td style="border-right: 0 " class="kod prime_kod">
                                </br>
                            </td>

                        </tr>
<!-- ==3============================== -->


                        <tr>
                            <td class="table_step">
                                2
                            </td>


                            <td>
                            The next step is to know what is the edge of the upper border of the range 
                            </td>

                            <td class="kod prime_kod">
                                <code> ins_num = number('Enter the upper  </br> border of the range in which to find prime numbers');</code>
                            </td>

                        </tr>
<!-- ==4============================== -->

                         <tr>
                            <td class="table_step">
                               op[A]
                            </td>


                            <td>
                                Optionally we can start a timer, this line measures the time at the start.
                            </td>

                            <td class="kod prime_kod">
                                <code> begin = clock();</code>
                            </td>

                        </tr>
<!-- ==5============================== -->

                         <tr>
                            <td class="table_step">
                                3
                            </td>


                            <td>
                                Then begin the first for loop
                            </td>

                            <td class="kod prime_kod">
                                <code>&nbsp;for (cheked_number; cheked_number<=ins_num; cheked_number++)</code>
                            </td>

                        </tr>
<!-- ==6============================== -->

                         <tr>
                            <td class="table_step" style="border-right: 0 ; ">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0">
                            
                            </td>

                            <td  class="kod prime_kod">
                                <code>&nbsp;{</code>
                            </td>

                        </tr>
<!-- ==7============================== -->


                           <tr>
                            <td style="border-right: 0 " class="table_step">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0" >
                            
                            </td>

                            <td style="border-right: 0 " class="kod prime_kod">
                                </br>
                            </td>

                        </tr>
<!-- ==8============================== -->


                        <tr>
                            <td class="table_step">
                                4
                            </td>


                            <td>
                                Initialize the is divisible flag with zero.
                            </td>

                            <td class="w_petli kod prime_kod">
                                <code>&nbsp;&nbsp; is_divisible = 0;</code>
                            </td>

                        </tr>
<!-- ==9============================== -->
                           <tr>
                            <td style="border-right: 0 " class="table_step">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0" >
                            
                            </td>

                            <td style="border-right: 0 " class="kod prime_kod">
                                </br>
                            </td>

                        </tr>
<!-- ==10============================== -->

                        <tr>
                            <td class="table_step">
                                5
                            </td>


                            <td>
                                Then begin the second for loop.
                            </td>

                            <td class="w_petli kod prime_kod">
                                <code>&nbsp;&nbsp;for (pot_div=2; pot_div&lt;ins_num; pot_div++)</code>
                            </td>

                        </tr>
<!-- ==8============================== -->
                                   <tr>
                            <td class="table_step" style="border-right: 0 ; ">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0">
                            
                            </td>

                            <td  class="kod prime_kod">
                                <code>&nbsp;&nbsp;{</code>
                            </td>

                        </tr>
<!-- ==9============================== -->

                        <tr>
                            <td class="table_step">
                                6
                            </td>


                            <td>
                                An if increments the flag.
                            </td>

                            <td class="w_petli kod prime_kod">
                                <code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cheked_number % potential_dividers == 0 );</code>
                            </td>

                        </tr>
<!-- ==10============================== -->

                         <tr>
                            <td class="table_step" style="border-right: 0 ; ">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0">
                            
                            </td>

                            <td  class="kod prime_kod">
                                <code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</code>
                            </td>
                        </tr>
<!-- ==11============================== -->

                         
                        <tr>
                            <td class="table_step">
                                7
                            </td>


                            <td>
                                Initialize the is divisible flag with zero.
                            </td>

                            <td class="w_petli kod prime_kod">
                                <code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; is_divisible++;</code>
                            </td>

                        </tr>
<!-- ==12============================== -->

                         <tr>
                            <td class="table_step" style="border-right: 0 ; ">

                            </td>


                            <td style="border-right: 0 ; border-left: 0">

                            </td>

                            <td  class="kod prime_kod">
                            <code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</code>
                            </td>
                        </tr>
<!-- ==13============================== -->

                        <tr>
                            <td style="border-right: 0 " class="table_step">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0" >
                            
                            </td>

                            <td style="border-right: 0 " class="kod prime_kod">
                                <code>&nbsp;&nbsp;}</code>
                            </td>
                        </tr>
<!-- ==14============================== -->
                        <tr>
                            <td class="table_step">
                                8
                            </td>


                            <td>
                                If at the end of the both for loops the flag is just one.
                            </td>

                            <td class="w_petli kod prime_kod">
                                <code> &nbsp;&nbsp;if (is_divisible == 1 );</code>
                            </td>

                        </tr>
<!-- ==15============================== -->
                        <tr>
                            <td style="border-right: 0 " class="table_step">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0" >
                            
                            </td>

                            <td style="border-right: 0 " class="kod prime_kod">
                                <code>&nbsp;&nbsp;{</code>
                            </td>
                        </tr>
<!-- ==16============================== -->

                                                <tr>
                            <td class="table_step">
                                9
                            </td>


                            <td>
                                Print out the current prime number e.g. 2, 3, 5...
                            </td>

                            <td class="w_petli kod">
                                <code>&nbsp;&nbsp;out < cheked_number</code>
                            </td>

                        </tr>
<!-- ==17============================== -->

                        <tr>
                            <td style="border-right: 0 " class="table_step">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0" >
                            
                            </td>

                            <td style="border-right: 0 " class="kod prime_kod">
                                <code>&nbsp;&nbsp;}</code>
                            </td>

                        </tr>
<!-- ==18============================== -->
                        <tr>
                            <td style="border-right: 0 " class="table_step">
                            
                            </td>


                            <td style="border-right: 0 ; border-left: 0" >
                            
                            </td>

                            <td style="border-right: 0 " class="kod prime_kod">
                                <code>}</code>
                            </td>

                        </tr>
<!-- ==18============================== -->
                        <tr>
                            <td class="table_step">
                               op[B]
                            </td>


                            <td>
                                This line calculates the time at the end of the operation.
                            </td>

                            <td class="kod prime_kod">
                                <code> end = clock();</code>
                            </td>
                        </tr>
<!-- ==19============================== -->

                        <tr>

                            <td class="table_step">
                               op[C]
                            </td>


                            <td>
                                This line calculates the total time the operation took to finish.
                            </td>

                            <td class="kod prime_kod">
                                <code> out < operation done in (end - start) seconds</code>
                            </td>

                        </tr>
<!-- ==20============================== -->

                </table>
   <div class="container">
        <div class="row">
            
           


</body>
</html>
