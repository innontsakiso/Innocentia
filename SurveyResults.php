<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$conn = mysqli_connect("localhost", "root", "", "innocentia");
$query_num_rows = "select* from surveytable ";
$result = mysqli_query($conn, $query_num_rows);
$num_surveys = mysqli_num_rows($result);

$query_avg_age = "SELECT AVG(age) AS average FROM surveytable";
$query_resultavg = mysqli_query($conn, $query_avg_age);
while ($row = mysqli_fetch_assoc($query_resultavg)) {
    $average_age = $row['average'];
    $average_age = round($average_age, 1);
}
$query_oldest_person = "SELECT MAX(age) AS age FROM surveytable";
$oldest_person_result = mysqli_query($conn, $query_oldest_person);

while ($row = mysqli_fetch_assoc($oldest_person_result)) {
    $oldest_person = $row['age'];
}

$query_youngest_person = "SELECT MIN(age) AS age FROM surveytable";
$youngest_person_result = mysqli_query($conn, $query_youngest_person);

while ($row = mysqli_fetch_assoc($youngest_person_result)) {
    $youngest_person = $row['age'];
}

$query_percentage_pizza = "select* from surveytable where pizza='pizza'";
$resultPizza = mysqli_query($conn, $query_percentage_pizza);
$num_percentage_pizza = mysqli_num_rows($resultPizza);
$resultPizza = $num_percentage_pizza / $num_surveys * 100;

$query_percentage_Pasta = "select* from surveytable where pasta='pasta'";
$resultPasta = mysqli_query($conn, $query_percentage_Pasta);
$num_percentage_Pasta = mysqli_num_rows($resultPasta);
$resultPasta = $num_percentage_Pasta / $num_surveys * 100;

$query_percentage_pap_and_wors = "select* from surveytable where pap_and_wors='Pap_and_Wors'";
$resultpap_and_wors = mysqli_query($conn, $query_percentage_pap_and_wors);
$num_percentage_pap_and_wors = mysqli_num_rows($resultpap_and_wors);
$resultpap_and_wors = $num_percentage_pap_and_wors / $num_surveys * 100;

$query_eatOut = "SELECT * FROM surveytable where EatOut='Strongly Agree (1)' OR EatOut = 'Agree (2)' OR EatOut = 'Neutral (3)' ";
$resultEat = mysqli_query($conn, $query_eatOut);
$num_eat = mysqli_num_rows($resultEat);
$totalEat=$num_eat/$num_surveys;
        $totalEat=round($totalEat, 1);
        
        
 $query_WatchTV  = "SELECT * FROM surveytable where WatchTV='Strongly Agree (1)' OR WatchTV = 'Agree (2)' OR WatchTV = 'Neutral (3)' ";
$resultWatchTV = mysqli_query($conn, $query_WatchTV );
$num_WatchTV = mysqli_num_rows($resultWatchTV);
$totalWatchTV=$num_WatchTV /$num_surveys;
        $totalWatchTV=round($totalWatchTV, 1);    
        
         $query_WatchMovies = "SELECT * FROM surveytable where WatchMovies='Strongly Agree (1)' OR WatchMovies= 'Agree (2)' OR WatchMovies= 'Neutral (3)' ";
$resultWatchMovies = mysqli_query($conn, $query_WatchMovies);
$num_WatchMovies = mysqli_num_rows($resultWatchMovies);
$totalWatchMovies=$num_WatchMovies /$num_surveys;
        $totalWatchMovies=round($totalWatchMovies, 1);
        
         $query_ListenRadio = "SELECT * FROM surveytable where ListenRadio='Strongly Agree (1)' OR ListenRadio= 'Agree (2)' OR ListenRadio= 'Neutral (3)' ";
$resultListenRadio = mysqli_query($conn, $query_ListenRadio);
$num_ListenRadio = mysqli_num_rows($resultListenRadio);
$totalListenRadio=$num_ListenRadio /$num_surveys;
        $totalListenRadio=round($totalListenRadio, 1);

    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>View Survey Results</title>
        </head>
        <body>

            <p> 
                <label>Total number of surveys: <?php echo $num_surveys; ?></label><br>
                <label>Average age:<?php echo $average_age; ?></label><br> 
                <label>Oldest person who participated in the survey:<?php echo $oldest_person; ?></label><br>
                <label>Youngest person who participated in the survey:<?php echo $youngest_person; ?></label><br>
            </p>
            <p>
                <label>Percentage of people who like pizza:<?php echo $resultPizza; ?></label><br> 
                <label>Percentage of people who like pasta:<?php echo $resultPasta; ?></label><br> 
                <label>Percentage of people who like pap and wors:<?php echo $resultpap_and_wors; ?></label><br>

        </p>
        <p>
            <label>People like to eat out:<?php echo $totalEat; ?></label><br>
            <label>People like watch movies:<?php echo $totalWatchMovies?></label><br>
            <label>People like to watch TV:<?php echo $totalWatchTV ?></label><br>
            <label>People like to listen to the radio:<?php echo $totalListenRadio ?></label><br>
            <h3><a class="btn"  href="index.php">OK</a></h3>
        </p>

    </body>
</html>
