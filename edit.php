<?php

    include 'db.php';

    $id = $_GET['id'];

    if(isset($_POST['submit'])){

        $name = $_POST['fname'];
        $lname = $_POST['lname'];
        $class = $_POST['class'];
        $dob = $_POST['dob'];
        $parent_fname = $_POST['parent_fname'];
        $parent_lname = $_POST['parent_lname'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $zip_code = $_POST['zip-code'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $sql = "UPDATE students_details SET Fname='$name', Lname='$lname', Class='$class', DOB='$dob', Parent_Fname='$parent_fname', Parent_Lname='$parent_lname', Address='$address', Address2='$address2', City='$city', Region='$region', zip_code='$zip_code', State='$state', Phone='$phone', Email='$email' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data updated successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         header("Location: dashboard.php");
    }

    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students_details WHERE id=$id"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student-add.css">
    <!-- <title>Document</title> -->
</head>
<body>
      <div class="container">

            <h1>Update Student Information</h1>

            <form method="POST" action="">

                <!-- Student Name -->
                <div class="form-group">
                    <label>
                        Student's Name :
                    </label>

                    <div class="row">
                        <input type="text" name="fname" value="<?php echo $row['Fname']; ?>"  placeholder="Sanjay">
                        <input type="text" name="lname" value="<?php echo $row['Lname']; ?>"  placeholder="Kumar">
                    </div>
                </div>

                <!-- Class -->
                <div class="form-group">
                    <label>
                        Class you want to apply for :
                    </label>

                    <input type="text" name="class" value="<?php echo $row['Class']; ?>" placeholder="Class">
                </div>

                <!-- DOB -->
                <div class="form-group">
                    <label>
                        Student's DOB:
                    </label>

                    <input type="date" value="<?php echo $row['DOB']; ?>" name="dob" >
                </div>

                <!-- Parent Name -->
                <div class="form-group">
                    <label>
                        Parent/Guardian Name:
                    </label>

                    <div class="row">
                        <input type="text" value="<?php echo $row['Parent_Fname']; ?>" name="parent_fname" placeholder="First">
                        <input type="text" value="<?php echo $row['Parent_Lname']; ?>" name="parent_lname" placeholder="Last">
                    </div>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label>
                        Current Address :
                    </label>

                    <div>

                        <input type="text" name="address" value="<?php echo $row['Address']; ?>" placeholder="Street Address">

                        <input class="mt" type="text" name="address2" value="<?php echo $row['Address2']; ?>" placeholder="Street Address Line 2">

                        <div class="row mt">
                            <input type="text" name="city" value="<?php echo $row['City']; ?>" placeholder="City">
                            <input type="text" name="region" value="<?php echo $row['Region']; ?>" placeholder="Region">
                        </div>

                        <div class="row mt">
                            <input type="text" name="zip-code" value="<?php echo $row['zip_code']; ?>" placeholder="Postal / Zip Code">

                            <!-- <select name="state"  value="<?php echo $row['State']; ?>">
                                <option>State</option>
                                <option>Jamshedpur</option>
                                <option>Ranchi</option>
                                <option>Delhi</option>
                            </select> -->
                        </div>
                        <div class="row mt">
                            <input type="text" name="state" value="<?php echo $row['State']; ?>" placeholder="State">
                        </div>

                    </div>
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label>Phone :</label>

                    <input type="tel" value="<?php echo $row['Phone']; ?>" name="phone" placeholder="9508181***">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label>
                        Email :
                        <small>Your admission confirmation will be sent via email.</small>
                    </label>

                    <input type="email" value="<?php echo $row['Email']; ?>" name="email"  placeholder="sanjaykumar@gmail.com">
                </div>
                <div class="form-group">

                    <input class="submit" name="submit"  type="submit" value="Update">
                </div>

            </form>

        </div>
</body>
</html>