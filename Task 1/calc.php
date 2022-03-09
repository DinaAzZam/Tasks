<?php
    if(isset($_GET['submit'])) { 
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch($operator) {
            case "None":
                $message = "<div class='alert alert-danger'>
                    <h6>You need to select a method</h6>
                </div>";
                break;
            case "Add":
                $answer =  $result1 + $result2;
                $message = "<div class='alert alert-success'>
                    <h6>The Answer is $answer</h6>
                </div>";
                break;
            case "Substract":
                $answer = $result1 - $result2;
                $message = "<div class='alert alert-success'>
                    <h6>The Answer is $answer</h6>
                </div>";
                break;
            case "Multiply":
                $answer = $result1 * $result2;
                $message = "<div class='alert alert-success'>
                    <h6>The Answer is $answer</h6>
                </div>";
                break;
            case "Divide":
                $answer = $result1 / $result2;
                $message = "<div class='alert alert-success'>
                    <h6>The Answer is $answer</h6>
                </div>";
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center text-primary font-weight-bold h2">
                    Calculator
            </div>
            <div class="col-5 offset-4 mt-4">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="num1" class="form-control mb-2" placeholder="Enter Number 1">
                        <input type="text" name="num2" class="form-control mb-2" placeholder="Enter Number 2">
                        <select name="operator">
                            <option>None</option>
                            <option>Add</option>
                            <option>Subtract</option>
                            <option>Multiply</option>
                            <option>Divide</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                    <button type="submit" name="submit" class="btn btn-outline-primary form-control">Calculate</button>
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