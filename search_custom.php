<?php
include("db.php");


$search = $_POST["search"];

if(!empty($search)) {
    $message = "Results not found";
    $query = "SELECT * FROM cars where cars LIKE '$search%'";
    $search_query = mysqli_query($connection, $query);
    $search_count = mysqli_num_rows($search_query);
    if(!$search_query) {
        die("Query Failed" . mysqli_error($connection));
    }
    if($search_count>=1) {
        while($row = mysqli_fetch_array($search_query)) {
            $cars = $row["cars"];

        ?>
        <ul class="list-unstyled">
        <?php

            echo "<li>{$cars}</li>";
        ?>
        </ul>


    <?php }
    } else {
        echo $message;
    }



}






