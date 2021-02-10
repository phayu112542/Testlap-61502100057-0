<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>กรอกข้อมูล</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>id_movie</label>
                            <input type="text" name="id_movie" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>moviename</label>
                            <input type="text" name="movie_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="date" name="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>namecustomer</label>
                            <input type="text" name="name_cus" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>pin</label>
                            <input type="password" name="pin" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>