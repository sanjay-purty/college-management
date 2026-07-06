<?php
include 'db.php';

 
$id = $_GET['id'];

$sql = "SELECT * FROM teachers_details WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher  Details</title>

    <style>
        *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#e5e7eb;
    padding:40px 15px;
}

.student-card{
    max-width:900px;
    margin:auto;
    background:#fff;
    border-top:8px solid #1e40af;
    border-radius:10px;
    box-shadow:0 4px 15px rgba(0,0,0,0.15);
    overflow:hidden;
}

.student-card h2{
    background:#1e40af;
    color:#fff;
    text-align:center;
    padding:18px;
    font-size:30px;
    letter-spacing:1px;
}

/* Details Table Style */
.details{
    display:grid;
    grid-template-columns:250px 1fr;
    margin:25px;
    border:1px solid #d1d5db;
}

.label{
    background:#f3f4f6;
    padding:15px;
    font-weight:bold;
    border-bottom:1px solid #d1d5db;
    border-right:1px solid #d1d5db;
}

.value{
    padding:15px;
    border-bottom:1px solid #d1d5db;
}

.label:last-child,
.value:last-child{
    border-bottom:none;
}

/* Buttons */
.btn{
    text-align:center;
    margin:20px;
}

.btn button{
    padding:12px 30px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:15px;
    font-weight:bold;
}

.btn:first-of-type button{
    background:#2563eb;
    color:white;
}

.btn:last-of-type button{
    background:#dc2626;
    color:white;
}

.btn button:hover{
    opacity:0.9;
}

/* Mobile */
@media(max-width:768px){

    .details{
        grid-template-columns:1fr;
    }

    .label{
        border-right:none;
        background:#dbeafe;
    }

    .student-card h2{
        font-size:24px;
    }

    .btn button{
        width:100%;
    }
}

/* Print */
@media print{

    .btn{
        display:none;
    }

    body{
        background:#fff;
    }

    .student-card{
        box-shadow:none;
        border:1px solid #000;
    }
}
    </style>

</head>
<body>

<div class="student-card">

    <h2>Teacher Details</h2>

    <div class="details">

        <div class="label">Teacher ID</div>
        <div class="value"><?php echo $row['id']; ?></div>

        <div class="label">Teacher Name</div>
        <div class="value"><?php echo $row['name']; ?></div>

         <div class="label">Father's Name</div>
        <div class="value"><?php echo $row['father']; ?></div>

        <div class="label">Gender</div>
        <div class="value"><?php echo $row['gender']; ?></div>

        <div class="label">Phone</div>
        <div class="value"><?php echo $row['number']; ?></div>

        <div class="label">DOB</div>
        <div class="value"><?php echo $row['DOB']; ?></div>
        
         <div class="label">Marital Status</div>
        <div class="value"><?php echo $row['marital']; ?></div>

        <div class="label">Address</div>
        <div class="value"><?php echo $row['address']; ?></div>

        <div class="label">Email</div>
        <div class="value"><?php echo $row['mail']; ?></div>

        <div class="label">Phone</div>
        <div class="value"><?php echo $row['number']; ?> </div>

        <div class="label">joining Date</div>
        <div class="value"><?php echo $row['joining']; ?></div>

        <div class="label">Education</div>
        <div class="value"><?php echo $row['education']; ?></div>

         <div class="label">Experience</div>
        <div class="value"><?php echo $row['experience']; ?></div>

    </div>

    <div class="btn">
        <button onclick="window.print()">Print Details</button>
    </div>
    <div class="btn">
       <button onclick="window.location.href='teacher-delete.php?id=<?php echo $row['id']; ?>'">Delete</button>
    </div>
</div>

</body>
</html>