<?php
    $title = "Number";
    include_once "header.php";

    if($_POST){
        // Validation
        $_SESSION['phoneNumber'] = $_POST['phone'];
        
        $errors = [];
        if(empty($_POST['phone'])){
             $errors['phone-required'] = "<div class='text-danger my-1'> * Phone Number is Required </div>";
        }
        
    }
    
?>

<div class="container">
    <div class="row justify-content-center mt-1">
        <div class="col-12 text-center text-dark h1 font-weight-bold">
            Hospital
        </div>
        <div class="col-lg-6 col-md-8 mt-4 offset-3">
            <form action="Review.php" method="post">
                <div class="form-group w-50">
                    <label>Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" aria-describedby="helpId" >
                    <?php 
                        if(isset($errors['phone-required'])){
                            echo $errors['phone-required'];
                        }
                    ?>
                </div>
                <div class="form-group">
                    <button class="mt-0 btn btn-outline-dark rounded"><?= $title ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    include_once "footer.php";
?>