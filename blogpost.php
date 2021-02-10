<?php

require './connection/connection.php';

if(isset($_REQUEST['addblogpost'])){
    header('Location:addblodpost.php');
}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <hr class="my-2"><br>
    <div class="container text-right float-right">
        <a href="blogcategory.php" class="btn btn-success">Manage category</a>
        <a href="#" class="btn btn-warning">My Profile</a>
        <a href="logout.php" class="btn btn-danger">Log Out</a>
    </div><br><br>
    <hr class="my-2"><br>
    <p class="lead">
        <a href="addblogpost.php" name="addblogpost" class="btn btn-success"> Add Blog Post</a>
    </p>
    <hr class="my-2"><br><br>

    <table class="table">
            <thead>
                <tr>
                    <th>Post ID</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Pubish Date</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = mysqli_query($conn,"SELECT * FROM blog_post");
                    while ($row = mysqli_fetch_array($result)){
                    ?>
                    <tr id="txtData">
                        <td scope="row"><?php echo $row['user_id'];?></td>
                        <td><?php echo $row['category_name'];?></td>
                        <td><?php echo $row['Title'];?></td>
                        <td><?php echo $row['Published_At'];?></td>
                        
                        <td><a href="./update.php?id=<?php echo $row['id'];?>" name="update" class="btn btn-light" >Update</a></td>
                        <td><button type="submit" name="delete" class="btn btn-dark" onclick="deleteUser(<?php echo $row['id'];?>)"> Delete</button></td>
                    </tr>
                    <?php
                    }?>                       
            </tbody>
        </table> 
      
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>