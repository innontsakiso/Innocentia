<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <h1<title>Take our Survey</title></h1>
    
    <link rel="stylesheet" type="text/css" href="DisplayStyle.css">
    </head>
    <body>

        <form class="two" action="insert.php" method="post">
            <div>
                <p class="three" >
                <label class="three">Personal details:</label><br>
                Surname:<input class="three" type="text" name="surname" required ></br>
                Full Names:<input  class="three" type="text" name="name" required ></br>
                Contact Number:<input class="three" type="text" name="contact" required ></br>
                Date:<input class="three" type="date" name="date" data-date-inline-picker="true" required ></br>
                Age:<input class="three" type="text" name="age" required ></br>
            </p>
            </div>
            <p>
                <label>What is your favourite food (You can choose more than one 1 answer)<label><br>

                        <input type="checkbox" name="Pizza" value="Pizza">Pizza</br>
                        <input type="checkbox" name="Pasta" value="Pasta">Pasta</br>
                        <input type="checkbox" name="Pap_and_wors" value="Pap_and_Wors">Pap and wors</br>
                        <input type="checkbox" name="Chicken_stir_fry" value="Chicken_stir_fry">Chicken stir fry</br>
                        <input type="checkbox" name="Beef_stir_fry" value="Beef_stir_fry">Beef stir fry</br>
                        <input type="checkbox" name="Other" value="Other">Other</br>
                        </p>
                        <p>
                            <label>On a scale of 1 to 5 indicate whether ypu strongly agree to strongly disagree<label><br>


                                    <table class="three"> 
                                        <thead>
                                            <tr >
                                                <th>         </th>
                                                <th>Strongly Agree (1)</th>
                                                <th>Agree (2)</th>
                                                <th>Neutral (3)</th>
                                                <th>Disagree (4)</th>
                                                <th>Strongly disagree (5)</th>
                                            </tr>
                                            <tr>
                                                <td>I like to eat out</td>
                                                <td>
                                                    <input type="radio" name="eatOut" value="Strongly Agree (1) " required="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="eatOut" value="Agree (2)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="eatOut" value="Neutral (3)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="eatOut" value="Disagree (4)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="eatOut" value="Strongly disagree (5)">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>I like to watch movies</td>
                                                <td>
                                                    <input type="radio" name="watchMovies" value="Strongly Agree (1)" required >
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchMovies" value="Agree (2)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchMovies" value="Neutral(3)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchMovies" value="Disagree (4)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchMovies" value="Strongly Agree (5)">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>I like to watch TV</td>
                                                <td>
                                                    <input type="radio" name="watchTV" value="Strongly Agree (1)" required >
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchTV" value="Agree (2)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchTV" value="Neutral (3)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchTV" value="Disagree (4)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="watchTV" value="Strongly disagree (5)">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>I like to listen to the radio</td>
                                                <td>
                                                    <input type="radio" name="listenRadio" value="Strongly Agree (1)" required >
                                                </td>
                                                <td>
                                                    <input type="radio" name="listenRadio" value="Agree (2)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="listenRadio" value="Neutral (3)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="listenRadio" value="Disgree (4)">
                                                </td>
                                                <td>
                                                    <input type="radio" name="listenRadio" value="Strongly disgree (5)">
                                                </td>

                                            </tr>


                                            <tr>
                                        
                                            </tr>
                                            
                                    </table>
                                    <input class="btn" type="submit" name="submit" value="submit">
                                    
                                    </form>

                                    <?php
                                    // put your code here
                                    ?>
                                    </body>
                                    </html>
