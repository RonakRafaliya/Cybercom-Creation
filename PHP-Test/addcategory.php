<?php
    



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
    <hr class="my-2">
    <h2 class="text-center my-3">Add Category</h2>
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
                <label for="">Meta Title</label>
                <input type="text" class="form-control" placeholder="Meta Title" name="mtitle" required>
            </div>
            <div class="col-lg-2">
                        
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <label for="pcategory">Parent Category</label>
                <select name="category" class="form-control">
                    <option value="lifestyle"><?php ?></option>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>