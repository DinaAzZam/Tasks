<?php
    if($_POST) {
        $physicsDeg = $_POST["num1"];
        $chemistryDeg = $_POST["num2"];
        $biologyDeg = $_POST["num3"];
        $mathDeg = $_POST["num4"];
        $computerDeg = $_POST["num5"];
        $sum = ($physicsDeg + $chemistryDeg + $biologyDeg + $mathDeg + $computerDeg);
        $gradePercentage = ($sum / 250) * 100;
        if(($physicsDeg > 50) || ($chemistryDeg > 50) || ($biologyDeg > 50) || ($mathDeg > 50) || ($computerDeg > 50) || 
            ($physicsDeg < 0) || ($chemistryDeg < 0) || ($biologyDeg < 0) || ($mathDeg < 0) || ($computerDeg < 0)) {
            $message = "<div class='alert alert-danger'>
                Please Enter a Valid Degree
            </div>";
        }else {
            if(($gradePercentage >= 90) && ($gradePercentage <= 100)) {
                $grade = "A";
                $message = "<div class='alert alert-success'>
                    Total: $sum/250 => Percentage : {$gradePercentage}% => Grade: {$grade}
                </div>";
            }elseif($gradePercentage >= 80) {
                $grade = "B";
                $message = "<div class='alert alert-success'>
                    Total: $sum/250 => Percentage : {$gradePercentage}% => Grade: {$grade}
                </div>";
            }elseif($gradePercentage >= 70) {
                $grade = "C";
                $message = "<div class='alert alert-success'>
                    Total: $sum/250 => Percentage : {$gradePercentage}% => Grade: {$grade}
                </div>";
            }elseif($gradePercentage >= 60) {
                $grade = "D";
                $message = "<div class='alert alert-success'>
                    Total: $sum/250 => Percentage : {$gradePercentage}% => Grade: {$grade}
                </div>";
            }elseif($gradePercentage >= 40) {
                $grade = "E";
                $message = "<div class='alert alert-success'>
                    Total: $sum/250 => Percentage : {$gradePercentage}% => Grade: {$grade}
                </div>";
            }elseif($gradePercentage < 40) {
                $grade = "F";
                $message = "<div class='alert alert-success'>
                    Total: $sum/250 => Percentage : {$gradePercentage}% => Grade: {$grade}
                </div>";
            }
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Grade</title>
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
                    Grade
                </div>
                <div class="col-5 offset-4 mt-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="number" name="num1" class="form-control" placeholder="Enter Your Physics Degree">
                            <input type="number" name="num2" class="form-control mt-2" placeholder="Enter Your Chemistry Degree">
                            <input type="number" name="num3" class="form-control mt-2" placeholder="Enter Your Biology Degree">
                            <input type="number" name="num4" class="form-control mt-2" placeholder="Enter Your Mathematics Degree">
                            <input type="number" name="num5" class="form-control mt-2" placeholder="Enter Your Computer Degree">
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-outline-primary form-control">Calculate</button>
                        </div>
                        <p class="text-danger mt-1">Note that Max Degree : 50</p>
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