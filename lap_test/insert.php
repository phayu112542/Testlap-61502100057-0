<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
     $id_movie = $_POST['id_movie'];
     $movie_name = $_POST['movie_name'];
     $time = $_POST['time'];
     $name_cus = $_POST['name_cus'];
     $pin = $_POST['pin'];
     $sql = "INSERT INTO major (id_movie,movie_name,time,name_cus,pin)
     VALUES ('$id_movie','$movie_name','$time','$name_cus','$pin')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
     
}
?>




