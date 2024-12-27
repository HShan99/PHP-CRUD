<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">City</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM user";
                            $results = mysqli_query($connection,$sql);
                            if(mysqli_num_rows($results)>0){
                                while($row = mysqli_fetch_assoc($results)){
                                    
                        ?>
                        <tr>
                            <th scope="row">
                                <?= $row['id']; ?>
                            </th>
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['phone']; ?></td>
                            <td><?= $row['city']; ?></td>
                            <td><a class="btn btn-primary" href="edit.php?id=<?=$row['id']; ?>">Edit</a></td>
                            <td><a class="btn btn-danger" href="delete.php?id=<?=$row['id']; ?>">Delete</a></td>
                        </tr>
                        <?php }}?>

                    </tbody>
                </table>
                <a href="back.php" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>

</body>

</html>