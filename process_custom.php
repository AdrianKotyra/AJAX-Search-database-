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
            $car_id = $row['id'];

            echo "<input type='text' rel='$car_id'class='form-control title-input'  value='$car'>";
            echo "<input type='button' class='btn btn-success update' value='UPDATE'>";
            echo "<input type='button' class='btn btn-danger delete' value='DELETE'>";

        }




    }
}


if(isset($_POST["updatethis"])) {

    $title = $_POST['title'];
    $id = $_POST['id'];

    $query = "UPDATE cars SET cars = '$title' WHERE id = $id";
    $results_set = mysqli_query($connection, $query);
    if(!$results_set) {
        die("Query failed " . mysqli_error($connection));
    }

}







?>

<script>
    $(document).ready(function(){
        let updatethis = "update";


        $(".title-input").on('input', function(){
            let id =  $(this).attr("rel");
            let title = $(this).val();



            $(".update").on("click", function(){
            $.post("process_custom.php", {title: title, id: id, updatethis: updatethis}, function(data){

            } )
        })



        })




    })



</script>

