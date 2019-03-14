<?php
include('../admin/dbconnect.php');
//$db = mysqli_connect('localhost', 'root', 'root', 'pmd');
if(isset($_POST['submit'])){

        $entryID = null;
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $carYear = $_POST['carYear'];
        $carMake = $_POST['carMake'];
        $carModel = $_POST['carModel'];
        $vclass = $_POST['vclass'];


        $query ="INSERT INTO carshow18 (entryID, firstName, lastName, email, phone, carYear, carMake, carModel, vclass) VALUES ('','$firstName','$lastName','$email','$phone','$carYear','$carMake','$carModel','$vclass');";
      //  $result = mysquli_query($db,$query);

    if (mysqli_query($db,$query)) {
        echo '<div class="alertBox"><i class="fa fa-check-circle valid" aria-hidden="true"></i><h3>Thank You!</h3> Your registration was successful!</div>';
    } else {
        echo '<div class="alertBox"><i class="fa fa-times-circle" aria-hidden="true"></i><h3>Oops!</h3> We encountered an issue, Please try again.</div>' ;
    }

    mysqli_close($db);
    }
?>
