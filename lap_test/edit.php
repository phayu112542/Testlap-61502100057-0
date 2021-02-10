<h1>  <a href="teble.php">Home</a> </h1>
<?php 
    require_once("connect.php");
    $sql = "UPDATE major SET
    movie_id = '{$_POST['movie_id']}',
    movie_name = '{$_POST['movie_name']}',
    time = '{$_POST['time']}',
    name_cus = '{$_POST['name_cus']}'
    pin = '{$_POST['pin']}'
    WHERE movie_id = '{$_POST['movie_id']}' ";

    if ($conn->query($sql) === TRUE) {
        sleep();
        header("location:table.php");
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
