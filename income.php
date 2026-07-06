<?php

include 'db.php';

// total-Tution-Fee-calculation:-
$detail = "SELECT * FROM `student_fee`";

$result = mysqli_query($conn, $detail);

$sql = "SELECT SUM(amount) AS total_income FROM student_fee";
$total_income_result = mysqli_query($conn, $sql);
$total_income_row = mysqli_fetch_assoc($total_income_result);
$total_income = $total_income_row['total_income'];

// total-admission-fee-calculation:-

$students_detail = "SELECT * FROM `students_details`";

$students_result = mysqli_query($conn, $students_detail);

$sql = "SELECT sum(add_fee) AS total_admission_fees FROM students_details";
$total_admission_fees_result = mysqli_query($conn, $sql);
$total_admission_fees_row = mysqli_fetch_assoc($total_admission_fees_result);
$total_admission_fees = $total_admission_fees_row['total_admission_fees'];
 
// total-income-calculation:-

$total = $total_income + $total_admission_fees;


 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Income Dashboard</title>
 <style>
                *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f7fb;
        }

        .dashboard{
            width:95%;
            margin:30px auto;
        }

        header{
            margin-bottom:30px;
        }

        header h1{
            color:#1e3a8a;
        }

        header p{
            color:#777;
            margin-top:5px;
        }

        /* Cards */

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
            gap:20px;
        }

        .card{
            background:#fff;
            padding:20px;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,.08);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card h3{
            color:#666;
            margin-bottom:15px;
        }

        .card h2{
            color:#1e3a8a;
            margin-bottom:10px;
        }

        .card span{
            color:green;
            font-size:14px;
        }

        /* Charts */

        .chart-section{
            display:grid;
            grid-template-columns:2fr 1fr;
            gap:20px;
            margin-top:30px;
        }

        .chart-box{
            background:#fff;
            padding:50px;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,.08);
        }

        .chart-placeholder{
            height:300px;
            display:flex;
            align-items:flex-end;
            justify-content:space-around;
            margin-top:20px;
        }

        .bar{
            width:45px;
            background:linear-gradient(to top,#2563eb,#60a5fa);
            border-radius:8px 8px 0 0;
        }

        /* Income List */

        .income-list{
            list-style:none;
            margin-top:20px;
        }

        .income-list li{
            display:flex;
            justify-content:space-between;
            padding:12px 0;
            border-bottom:1px solid #eee;
        }

        /* Table */

        .table-section{
            margin-top:30px;
            background:#fff;
            padding:20px;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,.08);
        }

        .table-section h3{
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#2563eb;
            color:white;
            padding:15px;
        }

        td{
            text-align:center;
            padding:15px;
            border-bottom:1px solid #ddd;
        }

        tr:hover{
            background:#f5f8ff;
        }

        .paid{
            background:#16a34a;
            color:white;
            padding:6px 12px;
            border-radius:20px;
            font-size:13px;
        }

        .pending{
            background:#f59e0b;
            color:white;
            padding:6px 12px;
            border-radius:20px;
            font-size:13px;
        }

        /* Responsive */

        @media(max-width:900px){

        .chart-section{
            grid-template-columns:1fr;
        }

        table{
            display:block;
            overflow-x:auto;
        }

        }
 </style>
</head>
<body>

<div class="dashboard">

    <header>
        <h1>Netaji Subhas University JSR</h1>
        <p>Income Dashboard</p>
    </header>

    <!-- Summary Cards -->
    <section class="cards">

        <div class="card">
            <h3>Total Income</h3>
            <h2>₹<?php echo number_format($total); ?></h2>
            <span>+15% This Month</span>
        </div>

        <div class="card">
            <h3>Tuition Fees</h3>
            <h2>₹<?php echo number_format($total_income); ?></h2>
            <span>70% of Total</span>
        </div>

        <div class="card">
            <h3>Admission Fees</h3>
            <h2>₹<?php echo number_format($total_admission_fees); ?></h2>
            <span>15% of Total</span>
        </div>

        <div class="card">
            <h3>Other Income</h3>
            <!-- <h2>₹<?php echo number_format($other_income); ?></h2> -->
            <span>Transport, Library etc.</span>
        </div>

    </section>

    <!-- Charts -->
    <section class="chart-section">

        <div class="chart-box">
            <h3>Monthly Income</h3>

            <div class="chart-placeholder">

                <div class="bar" style="height:45%;"></div>
                <div class="bar" style="height:65%;"></div>
                <div class="bar" style="height:55%;"></div>
                <div class="bar" style="height:90%;"></div>
                <div class="bar" style="height:80%;"></div>
                <div class="bar" style="height:100%;"></div>

            </div>

        </div>

        <div class="chart-box">
            <h3>Income Sources</h3>

            <ul class="income-list">
                <li><span>Tuition Fees</span><strong>₹8,70,000</strong></li>
                <li><span>Admission Fees</span><strong>₹1,80,000</strong></li>
                <li><span>Transport Fees</span><strong>₹80,000</strong></li>
                <li><span>Library Fees</span><strong>₹45,000</strong></li>
                <li><span>Hostel Fees</span><strong>₹70,000</strong></li>
            </ul>

        </div>

    </section>

    <!-- Transactions -->
    <section class="table-section">

        <h3>Recent Income Transactions</h3>

        <table>

             <thead>
                        <tr>
                            <th>Date</th>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Total-Fee</th>
                            <th>Paid</th>
                            <th>Balance</th>
                            <th>Status</th>
                            
                        </tr>
             </thead>

                    <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($result))
                                    { 
                            ?>
                                    <tr>
                                        <td><?php echo $row['fee_date']; ?></td>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['paid']; ?></td>
                                        <td><?php echo $row['balance']; ?></td>
                                        <td>
                                            <?php
                                                if($row['balance'] == 0)
                                                    {
                                                    echo '<span class="paid">Paid</span>';
                                                }
                                                else
                                                    {
                                                    echo '<span class="pending">Pending</span>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                            <?php
                                    }
                            ?>

                    </tbody>

        </table>

    </section>

</div>

</body>
</html>