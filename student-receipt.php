<?php
include 'db.php';

if (!isset($_GET['id'])) 
    {
        die("<center style='color: red;'>Student ID is missing.</center>");
    }

$student_id = $_GET['id'];

$sql = "SELECT * FROM student_fee WHERE id='$student_id'";

$result = mysqli_query($conn, $sql);

$student = mysqli_fetch_assoc($result);

?>




<!DOCTYPE html>
<html>
<head>
    <title>Student Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .receipt {
            max-width: 800px;
            margin: auto;
            border: 2px solid #000;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 5px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        .no-border {
            border: none;
        }

        .footer {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
        }

        .signature {
            text-align: center;
        }

        .paid {
            color: green;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="receipt" action="student-de.php">

    <div class="header">
        <h2>Netaji Subhas University of Technology</h2>
        <p>Jamshedpur, Jharkhand</p>
        <h3>STUDENT FEE PAYMENT RECEIPT</h3>
    </div>

    <table>
        <tr>
            <td><strong>Receipt No:</strong> REC-<?php echo $student['st_id']; ?><?php echo $student['fee_date']; ?></td>
            <td><strong>Date:</strong> <?php echo $student['fee_date']; ?></td>
        </tr>
        <tr>
            <td><strong>Student Name:</strong> <?php echo $student['name']; ?></td>
            <td><strong>Student ID:</strong> <?php echo $student['st_id']; ?></td>
        </tr>
        <tr>
            <td><strong>Course/Class:</strong> <?php echo $student['class']; ?></td>
            <td><strong>Semester:</strong> 1st Semester</td>
        </tr>
        <tr>
            <td><strong>Mobile:</strong> <?php echo $student['number']; ?></td>
            <td><strong>Payment Mode:</strong> <?php echo $student['method']; ?></td>
        </tr>
    </table>

    <h3>Fee Details</h3>

    <table>
        <tr>
            <th>Description</th>
            <th>Amount (₹)</th>
        </tr>
        <!-- <tr>
            <td>Admission Fee</td>
            <td>10,000</td>
        </tr> -->
        <tr>
            <td>Tuition Fee</td>
            <td>₹<?php echo $student['amount']; ?></td>
        </tr>
        <!-- <tr>
            <td>Library Fee</td>
            <td>1,500</td>
        </tr>
        <tr>
            <td>Examination Fee</td>
            <td>1,500</td>
        </tr> -->
        <tr>
            <th>Total Amount Paid</th>
            <th>₹<?php echo $student['paid']; ?></th>
        </tr>
    </table>

    <br>

    <table>
        <tr>
            <td><strong>Payment Balance:</strong> ₹<?php echo $student['balance']; ?></td>
        </tr>
         <tr>
            <td><strong>Transaction ID:</strong> NSU<?php echo $student['st_id']; ?></td>
        </tr>
        <tr>
            <td class="paid">PAYMENT SUCCESSFUL</td>
        </tr>
    </table>

    <div class="footer">
        <div class="signature">
            <strong>Student's Signature : </strong>
            <?php echo $student['name']; ?>
        </div>
        <div class="signature">
             <button onclick="window.print()">Print Details</button>
        </div>
        <div class="signature">
            <strong>Authorized Signatory</strong><br>
            Sanjay Purty<br>
            Accounts Department
        </div>
    </div>

</div>

</body>
</html>