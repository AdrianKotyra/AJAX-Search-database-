<?php
include("db.php");


$search = $_POST["search"];

if(!empty($search)) {
    $query = "SELECT * FROM cars where cars LIKE '$search%'";
    $search_query = mysqli_query($connection, $query);
    if(!$search_query) {
        die("Query Failed" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($search_query)) {
        $cars = $row["cars"];

    ?>
    <ul class="list-unstyled">
    <?php
        echo "<li>{$cars}</li>";

    ?>
    </ul>


<?php }

}






