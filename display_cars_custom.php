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
            echo "<td> <a rel='".$car_id."' class='title-link' href='javascript:void(0)'>$cars</a> </td>";

        echo "</tr>";
    }




}
?>
<script>
    $(document).ready(function(){

    $(".title-link").on('click', function(){
        $("#action-container").show();
        var id = $(this).attr("rel");
        $.post("process_custom.php", {id:id}, function(data) {
            $("#action-container").html(data);
        }




        );

    })
    })



</script>




