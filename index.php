<?php
    include 'config.php';
    $results="";
    if(isset($_POST['submit'])){
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $city = test_input($_POST['city']);

        $sql = "INSERT INTO user(name,email,phone,city)VALUES('$name','$email','$phone','$city')";
     
        
        if(mysqli_query($connection,$sql)){
            $results = "One Recode Insert Successfully";
        }
        else{
            $results = "Something went wrong";
        }
    
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row p-5 m-5">
            <div class="col-1g-4 offset-lg-4 bg-light text-dark m-4 p-5 rounder" style="width: 1000px; height: 500px;">
                <h3 class="text-center p-2">Insert Data Into Database</h3>
                <hr class="bg-light">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="name">City</label>
                        <input type="text" name="city" class="form-control" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-block m-2" value="Insert">
                    </div>

                    <div class="form-group text-center">
                        <a href="view.php" class="text-dark lead">View Recodes</a>
                    </div>
                    <div class="form-group text-center">
                        <p class="lead">
                            <?= $results; ?>
                        </p>
                    </div>


                </form>
            </div>
        </div>
    </div>

</body>


</html>