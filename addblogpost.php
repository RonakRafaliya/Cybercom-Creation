<?php error_reporting(E_ALL ^ E_NOTICE);

require './connection/connection.php';
if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['datetime']) && isset($_POST['category']) && isset($_POST['upload']))
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $url = $_POST['url'];
    $category = $_POST['category'];
    $datetime = $_POST['datetime'];

    if(!empty($title) && !empty($content) && !empty($url) && !empty($category) && !empty($datetime))
    {
        $query = "INSERT  into `blog_post` (Title,Url,Publish_At,category_name) VALUES ('".mysqli_real_escape_string($conn,$title)."','".mysqli_real_escape_string($conn,$url)."','".mysqli_real_escape_string($conn,$datetime)."','".mysqli_real_escape_string($conn,$category)."')";
                if($query_run = mysqli_query($conn, $query))
                {
                    echo 'Added successfully.....';
                    header('refresh:4; url=blogpost.php');
                    //header('Location: register_success.php');
                }else{
                    echo 'We couldn\'t add at this time. Try again later.';
                }
    }
    else{
        echo 'All field required...';
    }
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
    <form action="" method="post">
        <hr class="my-2">
        <h2 class="text-center my-3">Add Blog Post</h2>
        <hr class="my-2"><br>
        <div class="form-row">
            <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="title" require>
                </div>
                <div class="col-lg-4">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" placeholder="Content" name="content" required>
                </div>
                <div class="col-lg-2"></div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <label for="name">url</label>
                <input type="url" class="form-control" name="url" placeholder="url" require>
                </div>
            <div class="col-lg-4">
                <label for="">Publish At</label>
                <input type="datetime-local" class="form-control" name="datetime" required>
            </div>
            <div class="col-lg-2">
                        
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <label for="pcategory">Category</label>
                <select name="category" class="form-control">
                    <option value="lifestyle" selected>Lifestyle</option>
                    <option value="lifestyle">Health</option>
                    <option value="lifestyle">Education</option>
                    <option value="lifestyle">Music</option>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="img">Image</label>
                <input type="file" name="upload" class="form-control">
            </div>
            <div class="col-lg-2"></div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <button type="submit" name="addcategory" class="btn btn-lg btn-success">Add</button>
            </div>
        </div>  
    </div>
    </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>