<?php
include 'db.php';

if(isset($_POST['submit']))    
    {

        $name = $_POST['fname'];
        $gender = $_POST['gender'];
        $status = $_POST['marital']; 
        $dob = $_POST['dob'];
        $place = $_POST['place'];
        $fathername = $_POST['fathername'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $joining = $_POST['joining'];
        $address = $_POST['address'];
        $education = $_POST['education'];
        $courses = $_POST['courses'];
        $experience = $_POST['experience'];
        $statement = $_POST['statement'];
        
        $sql = "INSERT INTO `teachers_details` (`name`, `gender`, `marital`, `DOB`, `place`, `father`, `number`, `mail`, `joining`, `address`, `education`, `experience`, `course`, `summary`) VALUES ('$name', '$gender', '$status', '$dob', '$place', '$fathername', '$phone', '$email', '$joining', '$address', '$education', '$experience', '$courses', '$statement')";

        if (mysqli_query($conn, $sql))
        {
            echo "<script>alert('Data inserted successfully');</script>";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

            header("Location: dashboard.php");
        
        
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Recruitment Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
                            *{
                    margin:0;
                    padding:0;
                    box-sizing:border-box;
                    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }

                body{
                    min-height:100vh;
                    background:
                        linear-gradient(rgba(15,23,42,0.75), rgba(15,23,42,0.75)),
                        url("https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1600");
                    background-size:cover;
                    background-position:center;
                    background-attachment:fixed;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    padding:40px 20px;
                }

                .container{
                    width:100%;
                    max-width:1000px;
                    background:rgba(255,255,255,0.95);
                    backdrop-filter:blur(12px);
                    border-radius:25px;
                    padding:45px;
                    box-shadow:0 15px 50px rgba(0,0,0,0.25);
                    animation:fadeIn 0.8s ease;
                }

                h1{
                    text-align:center;
                    color:#0f172a;
                    font-size:42px;
                    margin-bottom:10px;
                }

                h1::after{
                    content:'';
                    display:block;
                    width:120px;
                    height:4px;
                    background:#2563eb;
                    margin:12px auto;
                    border-radius:20px;
                }

                label{
                    display:block;
                    font-weight:600;
                    color:#334155;
                    margin-bottom:8px;
                }

                .row{
                    display:flex;
                    gap:20px;
                    margin-bottom:20px;
                }

                .column{
                    flex:1;
                }

                input,
                select,
                textarea{
                    width:100%;
                    padding:14px 18px;
                    border:2px solid #e2e8f0;
                    border-radius:12px;
                    font-size:15px;
                    background:#fff;
                    transition:all .3s ease;
                }

                input:focus,
                select:focus,
                textarea:focus{
                    border-color:#2563eb;
                    box-shadow:0 0 15px rgba(37,99,235,0.25);
                    transform:translateY(-2px);
                    outline:none;
                }

                textarea{
                    min-height:140px;
                    resize:vertical;
                }

                .radio-group{
                    display:flex;
                    gap:15px;
                    flex-wrap:wrap;
                    margin-top:10px;
                }

                .radio-group label{
                    background:#f1f5f9;
                    padding:10px 15px;
                    border-radius:10px;
                    cursor:pointer;
                    transition:0.3s;
                }

                .radio-group label:hover{
                    background:#dbeafe;
                }

                button{
                    width:100%;
                    padding:16px;
                    border:none;
                    border-radius:12px;
                    background:linear-gradient(135deg,#2563eb,#4f46e5);
                    color:white;
                    font-size:18px;
                    font-weight:600;
                    cursor:pointer;
                    transition:all .3s ease;
                    margin-top:20px;
                }

                button:hover{
                    transform:translateY(-3px);
                    box-shadow:0 10px 25px rgba(37,99,235,0.4);
                }

                button:active{
                    transform:scale(0.98);
                }

                @keyframes fadeIn{
                    from{
                        opacity:0;
                        transform:translateY(30px);
                    }
                    to{
                        opacity:1;
                        transform:translateY(0);
                    }
                }

                @media(max-width:768px){
                    .row{
                        flex-direction:column;
                    }

                    .container{
                        padding:25px;
                    }

                    h1{
                        font-size:30px;
                    }
                }
    </style>
</head>

<body>

    <div class="container">
        <h1>Teacher Recruitment Form</h1>

        <form method="POST" action="">
            <div class="full-width">
                <label>Full Name:</label>
                <input type="text" name="fname" placeholder="Enter Full Name" required>
            </div>

            <div class="row">
                <div class="column">
                    <label>Gender:</label>
                    <div class="radio-group">
                        <select name="gender">
                            <option value="gender">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <!-- <label><input type="radio" name="gender"> Male</label> -->
                        <!-- <label><input type="radio" name="gender"> Female</label> -->
                    </div>
                </div>

                <div class="column">
                    <label>Marital Status:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="marital"> Single</label>
                        <label><input type="radio" name="marital"> Married</label>
                        <label><input type="radio" name="marital"> Divorced</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Birth Date:</label>
                    <input type="date" name="dob">
                </div>

                <div class="column">
                    <label>Birth Place:</label>
                    <input type="text" name="place">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Father's Name:</label>
                    <input type="text" name="fathername">
                </div>

                <div class="column">
                    <label>Phone Number:</label>
                    <input type="text" name="phone">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>E-mail:</label>
                    <input type="email" name="email">
                </div>

                <div class="column">
                    <label>Joining Date:</label>
                    <input type="date" name="joining">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Address:</label>
                    <input type="text" name="address">
                </div>

                <div class="column">
                    <label>Educational Background:</label>
                    <input type="text" name="education">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Other Relevant Courses:</label>
                    <input type="text" name="courses">
                </div>

                <div class="column">
                    <label>Teaching Experience:</label>
                    <input type="text" name="experience">
                </div>
            </div>

            <div class="full-width">
                <label>
                    In one Paragraph, State why you have decided to be a language instructor
                    and how one can make a good English teacher.
                    (Obligatory: No less than 100 words)
                </label>
                <textarea rows="5" name="statement"></textarea>
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>