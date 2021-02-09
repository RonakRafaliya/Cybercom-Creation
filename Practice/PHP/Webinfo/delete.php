<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <?php

            require('./connection/connection.php');
            $ob = new contact();

            $id = intval($_GET['id']);
            echo $id;

            $query = "DELETE from contacts WHERE id = '$id'";
            $sql = $ob->con->query($query);
            
            //header("Location:contacts.php?delete_msg=Contact Delete Successfully..");
            $ob->displayData();

            mysqli_close($ob->con);

        ?>
    </body>
</html>