<?php
include 'db.php';

if(isset($_POST['submit'])) {
    $student_id = $_POST['student_id'];

    // Redirect to the receipt page with the student ID as a query parameter
    header("Location: student-receipt.php?id=$student_id");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Receipt</title>
    <style>
                body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            .container {
                width: 400px;
                margin: 80px auto;
                background: white;
                padding: 25px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            h2 {
                text-align: center;
                color: #003366;
                margin-bottom: 20px;
            }

            label {
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            button {
                width: 100%;
                padding: 10px;
                background-color: #003366;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0055aa;
            }
    </style>
</head>
<body>

<h2>Student Receipt</h2>

<form action="" method="POST">
    <label>Enter Student ID:</label>
    <input type="text" name="student_id" required>
  
    <button type="submit" name="submit">Show Receipt</button>
</form>

</body>
</html>