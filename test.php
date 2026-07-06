<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $DOB = $_POST['DOB'];
    $mail = $_POST['mail'];

    $sql =  "INSERT INTO `contact` (`f_name`, `l_name`, `DOB`, `email`) VALUES ('$fname', '$lname', '$DOB', '$mail')";

    if (mysqli_query($conn, $sql)) {
        echo " successfully loaded";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
         <div class="form-group">
            <label for="">First Name:</label>
            <input type="text" name="fname" placeholder="First Name">
        </div>
    
        <div class="form-group">
            <label for="">Last Name:</label>
            <input type="text" name="lname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="">DOB:</label>
            <input type="date" name="DOB" placeholder="Date of Birth">
        </div>
        <div class="form-group">
            <label for="">mail-id:</label>
            <input type="text" name="mail" placeholder="Email ID">
        </div>
       <div class="form-group">
             
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>