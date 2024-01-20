<?php

include("db.php");

if(isset($_POST["car_name"])) {
    $car_name = $_POST["car_name"];
    $query = "INSERT INTO cars(cars) VALUES ('$car_name')";
    $query_car_name = mysqli_query($connection, $query);
    if(!$query_car_name) {
        die("query failed" . mysqli_error($connection));
    }
    else {
        echo "Car has been added";
    }
    // while($row = mysqli_fetch_array($query_car_name)) {
    //     $car_names = $row["cars"];
    // }


}





?>