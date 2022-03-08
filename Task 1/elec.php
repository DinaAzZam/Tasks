<?php
    if($_POST) {
        $elecUnit = $_POST["num1"];
        define("addedCharge", 0.2);
        if(($elecUnit > 0) &&($elecUnit <= 50)) {
            $units = (0.5 * $elecUnit);
            $charge = (addedCharge * $units);
            $unitsCharge = $units + $charge;
            $message = "<div class='alert alert-success'>
                <ul>
                    <li>Your Consumption : $elecUnit KW </li>
                    <li>Your Units Price : $units EGP</li>
                    <li>Added Charge : 20% </li>
                    <li> Your Electricity Price : $unitsCharge EGP</li>
                </ul>
            </div>";
        }elseif(($elecUnit > 50) &&($elecUnit <= 150)) {
            $units = (0.75 * $elecUnit);
            $charge = (addedCharge * $units);
            $unitsCharge = $units + $charge;
            $message = "<div class='alert alert-success'>
                <ul>
                    <li>Your Consumption : $elecUnit KW </li>
                    <li>Your Units Price : $units EGP</li>
                    <li>Added Charge : 20% </li>
                    <li> Your Electricity Price : $unitsCharge EGP</li>
                </ul>
            </div>";
        }elseif(($elecUnit > 150) &&($elecUnit <= 250)) {
            $units = (1.2 * $elecUnit);
            $charge = (addedCharge * $units);
            $unitsCharge = $units + $charge;
            $message = "<div class='alert alert-success'>
                <ul>
                    <li>Your Consumption : $elecUnit KW </li>
                    <li>Your Units Price : $units EGP</li>
                    <li>Added Charge : 20% </li>
                    <li> Your Electricity Price : $unitsCharge EGP</li>
                </ul>
            </div>";
        }else{
            $units = (1.5 * $elecUnit);
            $charge = (addedCharge * $units);
            $unitsCharge = $units + $charge;
            $message = "<div class='alert alert-success'>
                <ul>
                    <li>Your Consumption : $elecUnit KW </li>
                    <li>Your Units Price : $units EGP</li>
                    <li>Added Charge : 20% </li>
                    <li> Your Electricity Price : $unitsCharge EGP</li>
                </ul>
            </div>";
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Bill</title>
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
                    Electricity Bill
                </div>
                <div class="col-5 offset-4 mt-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="number" name="num1" class="form-control" placeholder="Enter Electricity Unit">
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-outline-primary form-control">Calculate</button>
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