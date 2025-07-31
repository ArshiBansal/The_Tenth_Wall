<!-- bookappointment.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['clientName'];
    $email = $_POST['clientEmail'];
    $phone = $_POST['clientPhone'];
    $date = $_POST['appointmentDate'];
    $time = $_POST['appointmentTime'];
    $location = $_POST['consultLocation'];
    $message = $_POST['clientMessage'];

    // Later: store in database

    echo "Thank you, $name. Your appointment request has been received.";
} else {
    echo "Invalid access.";
}
?>
