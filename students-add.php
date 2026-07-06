<?php
include 'db.php';

if(isset($_POST['submit']))    
    {

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
    $admission_fee = $_POST['admission_fee'];

        $sql =  "INSERT INTO `students_details` ( `Fname`, `Lname`, `Class`, `DOB`, `Parent_Fname`, `Parent_Lname`, `Address`, `Address2`, `City`, `Region`, `zip_code`, `State`, `Phone`, `Email`, `add_fee`) VALUES ('$name', '$lname', '$class', '$dob', '$parent_fname', '$parent_lname', '$address', '$address2', '$city', '$region', '$zip_code', '$state', '$phone', '$email', '$admission_fee')";

    if (mysqli_query($conn, $sql))
         {
                echo "<script>alert('Data inserted successfully');</script>";
        } 
    else 
        {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         };

    header("Location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student-add.css">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>School Admission Form</title>
        <link rel="stylesheet" href="student-add.css">
    </head>

    <body>

        <div class="container">

                <h1>School Admission Form</h1>
                <p class="subtitle">
                    Complete the admission application carefully. All fields marked are required.
                </p>

            <form method="POST" action="">

                <!-- Student Name -->
                <div class="form-group">
                    <label>
                        Student's Name :
                    </label>

                    <div class="row">
                        <input type="text" name="fname"  placeholder="Sanjay">
                        <input type="text" name="lname"  placeholder="Kumar">
                    </div>
                </div>

                <!-- Class -->
                <div class="form-group">
                    <label>
                        Class you want to apply for :
                    </label>

                    <input type="text" name="class" >
                </div>

                <!-- DOB -->
                <div class="form-group">
                    <label>
                        Student's DOB:
                    </label>

                    <input type="date" name="dob" >
                </div>

                <!-- Parent Name -->
                <div class="form-group">
                    <label>
                        Parent/Guardian Name:
                    </label>

                    <div class="row">
                        <input type="text"  name="parent_fname" placeholder="First">
                        <input type="text"  name="parent_lname" placeholder="Last">
                    </div>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label>
                        Current Address :
                    </label>

                    <div>

                        <input type="text" name="address"  placeholder="Street Address">

                        <input class="mt" type="text" name="address2"  placeholder="Street Address Line 2">

                        <div class="row mt">
                            <input type="text" name="city"  placeholder="City">
                            <input type="text" name="region"  placeholder="Region">
                        </div>

                        <div class="row mt">
                            <input type="text" name="zip-code"  placeholder="Postal / Zip Code">

                            <select name="state">
                                <option>State</option>
                                <option>Jamshedpur</option>
                                <option>Ranchi</option>
                                <option>Delhi</option>
                            </select>
                        </div>

                    </div>
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label>Phone :</label>

                    <input type="tel"  name="phone" placeholder="9508181***">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label>
                        Email :
                        <small>Your admission confirmation will be sent via email.</small>
                    </label>

                    <input type="email" name="email"  placeholder="sanjaykumar@gmail.com">
                </div>

                <div class="form-group">
                    <label>
                        Admission Fee :
                    </label>

                    <div class="row">
                        <input type="number" value="1000" name="admission_fee" placeholder="Admission Fee" readonly>
                    </div>
                </div>

                <div class="form-group">

                    <input class="submit" name="submit"  type="submit" value="Submit">
                </div>

            </form>

        </div>

    </body>

    </html>
</body>

</html>