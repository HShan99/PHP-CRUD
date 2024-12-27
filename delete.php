 <?php
    include 'config.php';
    $id = $_GET['id'];
    
    $sql = "DELETE FROM user WHERE id='$id'";
    if(mysqli_query($connection,$sql)){
        header('location:view.php');
    }
    else{
        echo "Something went wrong...";
    }
 ?>