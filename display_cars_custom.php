<?php include("db.php");

$query = "SELECT * FROM cars";
$query_car_info = mysqli_query($connection, $query);
if(!$query_car_info) {
    die("Query failed" . mysqli_error($connection));
}
else {
    while($row = mysqli_fetch_array($query_car_info)) {
        $cars = $row["cars"];
        $car_id =  $row["id"];

        echo "<tr>";
            echo "<td> $car_id </td>";
            echo "<td> $cars </td>";

        echo "</tr>";
    }




}




