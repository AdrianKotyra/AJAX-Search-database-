<?php include("db.php");

if(isset($_POST["id"])) {
    $query = "SELECT * FROM cars WHERE id= ".$_POST['id'];
    $query_car_info = mysqli_query($connection, $query);
    if(!$query_car_info) {
        die("Query failed" . mysqli_error($connection));
    }
    else {
        while($row = mysqli_fetch_array($query_car_info)) {
            $car = $row['cars'];

            echo "<input type='text' class='form-control'  value='$car'>";
            echo "<input type='button' class='btn btn-success' value='UPDATE'>";
            echo "<input type='button' class='btn btn-danger' value='DELETE'>";

        }




    }
}



?>