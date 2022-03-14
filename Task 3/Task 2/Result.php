<?php
    $title = "Result";
    include_once "header.php";
    
    $total = $_SESSION['Opinion'] + $_SESSION['Opinion 1'] + $_SESSION['Opinion 2'] +
    $_SESSION['Opinion 3'] + $_SESSION['Opinion 4'] ;
    if ($total < 25) {
        $message = "We will call you later on this phone : " . $_SESSION['phoneNumber'];
    } else {
        $message = "Thanks";
    }

    
    switch($_SESSION['Opinion']) {
        case 0:
            $messageReview = "Bad";
            break;
        case 3:
            $messageReview = "Good";
            break;
        case 5:
            $messageReview = "Very Good";
            break;
        case 10:
            $messageReview = "Excellent";
            break;
    }
    
    switch ($_SESSION['Opinion 1']) {
        case "0":
            $messageReview1 = "Bad";
            break;
        case "3":
            $messageReview1 = "Good";
            break;
        case "5":
            $messageReview1 = "Very Good";
            break;
        case "10":
            $messageReview1 = "Excellent";
            break;
    }
    switch ($_SESSION['Opinion 2']) {
        case "0":
            $messageReview2 = "Bad";
            break;
        case "3":
            $messageReview2 = "Good";
            break;
        case "5":
            $messageReview2 = "Very Good";
            break;
        case "10":
            $messageReview2 = "Excellent";
            break;
    }
    switch ($_SESSION['Opinion 3']) {
        case "0":
            $messageReview3 = "Bad";
            break;
        case "3":
            $messageReview3 = "Good";
            break;
        case "5":
            $messageReview3 = "Very Good";
            break;
        case "10":
            $messageReview3 = "Excellent";
            break;
    }
    switch ($_SESSION['Opinion 4']) {
        case "0":
            $messageReview4 = "Bad";
            break;
        case "3":
            $messageReview4 = "Good";
            break;
        case "5":
            $messageReview4 = "Very Good";
            break;
        case "10":
            $messageReview4 = "Excellent";
            break;
    }

?>

<div class="container">
    <div class="row justify-content-center mt-1">
        <div class="col-12 text-center text-dark h1 font-weight-bold">
            <?= $title ?>
        </div>
        <div class="col-lg-8 mt-5 offset-4">
            <table>
                <tr>
                    <td>Are you satisfied with the level of cleanliness?</td>
                    <td><?php echo $messageReview; ?> </td>
                </tr>
                <tr>
                    <td>Are you satisfied with the service prices?</td>
                    <td><?php echo $messageReview1; ?></td>
                </tr>
                <tr>
                    <td>Are you satisfied with the nursing service?</td>
                    <td><?php echo $messageReview2; ?></td>
                </tr>
                <tr>
                    <td>Are you satisfied with the level of the doctor?</td>
                    <td><?php echo $messageReview3; ?></td>
                </tr>
                <tr>
                    <td>Are you satisfied with the calmness in the hospital?</td>
                    <td><?php echo $messageReview4; ?></td>
                </tr>
            </table>
            <div class="col-lg-8 alert alert-success">
                <?php echo $message; ?>
            </div>
        </div>
    </div>
</div>

<?php 
    include_once "footer.php";
?>