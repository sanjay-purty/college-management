<?php

    include 'db.php';

    $id = $_GET['id'];

    if(isset($_POST['update'])){

        $name = $_POST['fname'];
        $gender = $_POST['gender'];
        $status = $_POST['marital'];
        $dob = $_POST['dob'];
        $place = $_POST['place'];
        $father_name = $_POST['fathername'];
        $phone = $_POST['number'];
        $joining = $_POST['joining'];
        $address = $_POST['address'];
        $education = $_POST['education'];
        $course = $_POST['courses'];
        $experience = $_POST['experience'];
        $statement = $_POST['statement'];
        $email = $_POST['email'];

        $sql = "UPDATE teachers_details SET name='$name', gender='$gender', marital='$status', DOB='$dob', place='$place', father='$father_name', number='$phone', joining='$joining', address='$address', education='$education', course='$course', experience='$experience', summary='$statement', mail='$email' WHERE id=$id";  

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data updated successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         header("Location: dashboard.php");
    }

    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM teachers_details WHERE id=$id"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher Details</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#eef2f7;
    padding:40px 20px;
}

.container{
    max-width:1000px;
    margin:auto;
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.12);
}

/* Header */

h1{
    background:#1e40af;
    color:white;
    text-align:center;
    padding:20px;
    font-size:30px;
    letter-spacing:1px;
}

form{
    padding:30px;
}

.row{
    display:flex;
    gap:20px;
    margin-bottom:20px;
}

.column{
    flex:1;
}

.full-width{
    margin-bottom:20px;
}

label{
    display:block;
    margin-bottom:8px;
    color:#374151;
    font-weight:600;
    font-size:14px;
}

input,
select,
textarea{
    width:100%;
    padding:12px 15px;
    border:1px solid #d1d5db;
    border-radius:6px;
    background:#f9fafb;
    font-size:15px;
}

input:focus,
select:focus,
textarea:focus{
    outline:none;
    border-color:#2563eb;
    box-shadow:0 0 5px rgba(37,99,235,0.3);
}

.radio-group{
    display:flex;
    gap:15px;
    align-items:center;
    flex-wrap:wrap;
}

.radio-group label{
    margin-bottom:0;
    font-weight:500;
}

textarea{
    resize:vertical;
    min-height:140px;
}

/* Submit Button */

button[type="submit"]{
    width:100%;
    padding:14px;
    border:none;
    border-radius:6px;
    background:#2563eb;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button[type="submit"]:hover{
    background:#1d4ed8;
}

/* Responsive */

@media(max-width:768px){

    .row{
        flex-direction:column;
    }

    h1{
        font-size:24px;
    }

    form{
        padding:20px;
    }
}
    </style>
</head>

<body>

    <div class="container">
        <h1>Update Teacher Details</h1>

        <form method="POST" action="">
            <div class="full-width">
                <label>Full Name:</label>
                <input type="text" name="fname" placeholder="Enter Full Name" value="<?php echo $row['name']; ?>" required>
            </div>

            <div class="row">
                <div class="column">
                    <label>Gender:</label>
                    <div class="radio-group">
                        <select name="gender">
                            <option value="gender">Select Gender</option>
                            <option value="Male" <?php if($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                        </select>
                        <!-- <label><input type="radio" name="gender"> Male</label> -->
                        <!-- <label><input type="radio" name="gender"> Female</label> -->
                    </div>
                </div>

                <div class="column">
                    <label>Marital Status:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="marital" value="Single" <?php if($row['marital'] == 'Single') echo 'checked'; ?>> Single</label>
                        <label><input type="radio" name="marital" value="Married" <?php if($row['marital'] == 'Married') echo 'checked'; ?>> Married</label>
                        <label><input type="radio" name="marital" value="Divorced" <?php if($row['marital'] == 'Divorced') echo 'checked'; ?>> Divorced</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Birth Date:</label>
                    <input type="date" name="dob" value="<?php echo $row['DOB']; ?>">
                </div>

                <div class="column">
                    <label>Birth Place:</label>
                    <input type="text" name="place" value="<?php echo $row['place']; ?>">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Father's Name:</label>
                    <input type="text" name="fathername" value="<?php echo $row['father']; ?>">
                </div>

                <div class="column">
                    <label>Phone Number:</label>
                    <input type="text" name="number" value="<?php echo $row['number']; ?>">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>E-mail:</label>
                    <input type="email" name="email" value="<?php echo $row['mail']; ?>">
                </div>

                <div class="column">
                    <label>Joining Date:</label>
                    <input type="date" name="joining" value="<?php echo $row['joining']; ?>">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Address:</label>
                    <input type="text" name="address" value="<?php echo $row['address']; ?>">
                </div>

                <div class="column">
                    <label>Educational Background:</label>
                    <input type="text" name="education" value="<?php echo $row['education']; ?>">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Other Relevant Courses:</label>
                    <input type="text" name="courses" value="<?php echo $row['course']; ?>">
                </div>

                <div class="column">
                    <label>Teaching Experience:</label>
                    <input type="text" name="experience" value="<?php echo $row['experience']; ?>">
                </div>
            </div>

            <div class="full-width">
                <label>
                    In one Paragraph, State why you have decided to be a language instructor
                    and how one can make a good English teacher.
                    (Obligatory: No less than 100 words)
                </label>
                <textarea rows="5" name="statement"><?php echo $row['summary']; ?></textarea>
            </div>

            <button type="submit" name="update">update</button>
        </form>
    </div>

</body>

</html>