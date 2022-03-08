<?php
    if($_POST) {
        $num = $_POST["num1"];
        $rootPow = $_POST["num2"];
        $root = pow($num , (1/$rootPow));
        $message = "<div class='alert alert-success'>
            <h6>The Root is : $root</h6>    
        </div>";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Root</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                    Root
                </div>
                <div class="col-6 offset-4 mt-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="number" name="num1" class="form-control" placeholder="Enter The Number">
                            <input type="number" name="num2" class="form-control my-2" placeholder="Enter The Root Power">
                        </div>
                        <div class="form-group my-3">
                            <button name="submit" class="btn btn-outline-primary form-control">Get The Root</button>
                        </div>
                    </form>
                    <?php 
                        if(isset($message)) {
                            echo $message;
                        }
                    ?>
                </div>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>