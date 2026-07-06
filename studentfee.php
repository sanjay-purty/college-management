<?php
include 'db.php';

if(isset($_POST['submit'])) {
    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    $phnumber = $_POST['number'];
    $course = $_POST['course'];
    $fee_amount = $_POST['fee_amount'];
    $paid_amount = $_POST['paid_amount'];
    $balance_amount =  $fee_amount - $paid_amount;
    $payment_method = $_POST['payment_method'];

    // Insert the payment details into the database
    $sql = "INSERT INTO `student_fee`(`name`, `st_id`, `class`, `amount`, `paid`, `balance`, `method`, `number`, `fee_date`) VALUES ('$student_name', '$student_id', '$course', '$fee_amount', '$paid_amount', '$balance_amount', '$payment_method', '$phnumber', '$date')";

    if (mysqli_query($conn, $sql))
     {
        echo "<script>alert('Payment successful!');</script>";
    } 
    else 
    {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    header("Location: student-de.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Online Fee Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Fee Payment</h2>

    <form action="" method="POST">
        <label>Student Name</label>
        <input type="text" name="student_name" required>

        <label>Student ID</label>
        <input type="text" name="student_id" required>

         <label>Date</label>
        <input type="date" name="date" required>
        
        <label>Phone Number</label>
        <input type="text" name="number" required>

        <label>Course/Class</label>
        <input type="text" name="course" required>

        <label> Total Fee (₹)</label>
        <input type="number" value="50000" name="fee_amount" required readonly>

        <label>Amount Pay (₹)</label>
        <input type="number" name="paid_amount" required>

        <!-- <label>Balance Amount (₹)</label> -->
        <!-- <input type="number" name="balance_amount" required> -->


        <label>Payment Method</label>
        <select name="payment_method" required>
            <option value="">Select Payment Method</option>
            <option>UPI</option>
            <option>Debit Card</option>
            <option>Credit Card</option>
            <option>Net Banking</option>
        </select>

        <button type="submit" name="submit">Pay Now</button>
    </form>
</div>

</body>
</html>