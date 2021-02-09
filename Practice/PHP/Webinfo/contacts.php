<?php error_reporting(E_ALL ^ E_NOTICE);
require './connection/connection.php';
$ob = new contact();

 
  
// Set session
session_start();
if(isset($_POST['records-limit'])){
      $_SESSION['records-limit'] = $_POST['records-limit'];
}
  
$limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 5;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;
//$authors = mysqli_query($ob->con,"SELECT * FROM contacts LIMIT $paginationStart, $limit")->fetchAll();

// Get total records
$sql = mysqli_fetch_array(mysqli_query($ob->con,"SELECT count(id) AS id FROM contacts"));
$allRecrods = $sql['id'];
  
// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;

if(isset($_REQUEST['create'])){
    header('Location:form.php');
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
        <script>
            function deleteUser(id) 
            {
                if (id == "") 
                {
                    document.getElementById("txtData").innerHTML = "";
                    return;
                } 
                else 
                {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() 
                    {
                        if (this.readyState == 4 && this.status == 200) 
                        {
                        document.getElementById("txtData").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","delete.php?id="+id,true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
<body>
    <form action="" method="post">
        <div class="container-fliud">
            <?php include('./navbar/navbar.php'); ?>
        </div>  
        <div class="jumbotron pb-1 mb-3">
            <hr class="my-2">
            <p>Read Contacts</p>
            <p class="lead">
                <button type="submit" name="create" class="btn btn-success">Create Contact</button>
            </p>
        </div>
        <?php 
            if(isset($_GET['insert_msg']))
            {  
        ?>
        <div class="alert alert-success" role="alert">
            <p class="mb-0 text-center">
            <?php 
                echo $_GET['insert_msg'];
                header('refresh:2; url=contacts.php'); 
            ?>
            </p>
        </div>
        <?php } ?>
        <?php 
            if(isset($_GET['update_msg']))
            {  
        ?>
        <div class="alert alert-warning" role="alert">
            <p class="mb-0 text-center">
            <?php 
                echo $_GET['update_msg'];
                header('refresh:2; url=contacts.php');
            ?>
            </p>
        </div>
        <?php } ?>
        <?php 
            if(isset($_GET['delete_msg']))
            {  
        ?>
        <div class="alert alert-success" role="alert">
            <p class="mb-0 text-center">
            <?php 
                echo $_GET['delete_msg'];
                header('refresh:2; url=contacts.php'); 
            ?>
            </p>
        </div>
        <?php } ?>
        
        <div class="float-right">
            <form action="contacts.php" method="POST">
                <select name="records-limit" id="records-limit" class="custom-select">
                    <option disabled selected hidden>Records Limit</option>
                    <?php foreach([5,7,10,12] as $limit) : ?>
                    <option
                        <?php if(isset($_SESSION['records-limit']) && $_SESSION['records-limit'] == $limit) echo 'selected'; ?>
                        value="<?= $limit; ?>">
                        <?= $limit; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>
        <br><br>
        <?php
            $data = $ob->displayData();
            if(!empty($data))
            { 
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Title</th>
                    <th>Created Time</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = mysqli_query($ob->con,"SELECT * FROM contacts LIMIT $paginationStart, $limit");
                    while ($row = mysqli_fetch_array($result)){
                    ?>
                    <tr id="txtData">
                        <td scope="row"><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['datetime'];?></td>

                        <td><a href="./update.php?id=<?php echo $row['id'];?>" name="update" class="btn btn-light" >Update</a></td>
                        <td><button type="submit" name="delete" class="btn btn-dark" onclick="deleteUser(<?php echo $row['id'];?>)"> Delete</button></td>
                    </tr>
                    <?php
                    } 
                }?>                        
            </tbody>
        </table> 
        <nav aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                    <a class="page-link"
                        href="<?php if($page <= 1){ echo '#'; } else { echo "?page=" . $prev; } ?>">Previous</a>
                </li>

                <?php for($i = 1; $i <= $totoalPages; $i++ ): ?>
                <li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
                    <a class="page-link" href="contacts.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                </li>
                <?php endfor; ?>

                <li class="page-item <?php if($page >= $totoalPages) { echo 'disabled'; } ?>">
                    <a class="page-link"
                        href="<?php if($page >= $totoalPages){ echo '#'; } else {echo "?page=". $next; } ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
   
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#records-limit').change(function () {
                $('form').submit();
            })
        });
    </script>
</body>
</html>