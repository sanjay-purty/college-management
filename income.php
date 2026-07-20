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

//percentage-calculation:-

if ($total > 0) 
        {
            $total_percentage = ($total_income / $total) * 100 + ($total_admission_fees / $total) * 100;
            $tuition_percentage = ($total_income / $total) * 100;
            $admission_percentage = ($total_admission_fees / $total) * 100;
        } 
else 
    {

        $tuition_percentage = 0;
         $admission_percentage = 0;
    }


 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Income Dashboard</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
 <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');


        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }


        body{

            background:#f1f5f9;

        }



        /* MAIN DASHBOARD */

        .dashboard{

            margin-left:260px;
            padding:25px;

        }



        /* HEADER */

        header{

            background:white;

            padding:20px 25px;

            border-radius:18px;

            margin-bottom:25px;

            box-shadow:0 6px 18px rgba(0,0,0,.08);

            border-left:6px solid #2563eb;

        }


        header h1{

            color:#0b4a8b;

            font-size:30px;

            font-weight:700;

        }


        header p{

            color:#64748b;

            margin-top:5px;

        }






        /* SUMMARY CARDS */


        .cards{

            display:grid;

            grid-template-columns:repeat(4,1fr);

            gap:20px;

        }



        .card{

            background:white;

            padding:35px;

            border-radius:20px;

            box-shadow:0 6px 18px rgba(0,0,0,.08);

            border-top:5px solid #2563eb;

            transition:.3s;

        }



        .card:hover{

            transform:translateY(-5px);

        }



        .card h3{

            color:#64748b;

            font-size:15px;    

            margin-bottom:10px;

        }



        .card h2{

            color:#0f172a;

            font-size:28px;

            margin-top:10px;

        }



        .card span{

            color:#16a34a;

            font-size:13px;

            font-weight:600;

            margin-bottom:5px;

        }







        /* CHART SECTION */


        .chart-section{

            display:grid;

            grid-template-columns:2fr 1fr;

            gap:20px;

            margin-top:25px;

        }




        .chart-box{

            background:white;

            padding:25px;

            border-radius:18px;

            box-shadow:0 6px 18px rgba(0,0,0,.08);

            border-top:5px solid #2563eb;

        }



        .chart-box h3{

            color:#0b5ed7;

            margin-bottom:20px;

            font-size:20px;

        }







        /* BAR CHART */


        .chart-placeholder{

            height:260px;

            display:flex;

            align-items:flex-end;

            justify-content:space-around;

            gap:15px;

        }



        .bar{

            width:45px;

            background:linear-gradient(#3b82f6,#2563eb);

            border-radius:8px 8px 0 0;

            transition:.3s;

        }



        .bar:hover{

            opacity:.8;

        }








        /* INCOME LIST */


        .income-list{

            list-style:none;

        }



        .income-list li{

            display:flex;

            justify-content:space-between;

            padding:14px 0;

            border-bottom:1px solid #e5e7eb;

        }



        .income-list li span{

            color:#475569;

        }



        .income-list strong{

            color:#0b5ed7;

        }








        /* TABLE SECTION */


        .table-section{

            background:white;

            margin-top:25px;

            padding:25px;

            border-radius:18px;

            box-shadow:0 6px 18px rgba(0,0,0,.08);

            border-top:5px solid #2563eb;

        }



        .table-section h3{

            color:#0b5ed7;

            margin-bottom:20px;

        }






        table{

            width:100%;

            border-collapse:collapse;

        }



        table th{

            background:#0b5ed7;

            color:white;

            padding:14px;

            text-align:left;

            font-size:14px;

        }



        table td{

            padding:14px;

            border-bottom:1px solid #e5e7eb;

            color:#334155;

            font-size:14px;

        }



        table tr:nth-child(even){

            background:#f8fafc;

        }



        table tr:hover{

            background:#eef6ff;

        }







        /* STATUS */


        .paid{

            background:#16a34a;

            color:white;

            padding:6px 14px;

            border-radius:20px;

            font-size:12px;

            font-weight:600;

        }



        .pending{

            background:#f59e0b;

            color:white;

            padding:6px 14px;

            border-radius:20px;

            font-size:12px;

            font-weight:600;

        }








        /* RESPONSIVE */


        @media(max-width:1100px){


        .cards{

            grid-template-columns:repeat(2,1fr);

        }


        .chart-section{

            grid-template-columns:1fr;

        }


        }




        @media(max-width:768px){


        .dashboard{

            margin-left:0;

            padding:15px;

        }



        .cards{

            grid-template-columns:1fr;

        }



        header h1{

            font-size:24px;

        }



        .chart-placeholder{

            height:200px;

        }



        table{

            display:block;

            overflow-x:auto;

            white-space:nowrap;

        }


        }



        @media(max-width:450px){


        .card h2{

            font-size:22px;

        }


        .bar{

            width:30px;

        }


        }
 </style>
</head>

<body>

<?php include 'sidebar.php'; ?>

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
            <!-- <span><?php echo round($total_percentage, 2); ?>% This Month</span> -->
        </div>

        <div class="card">
            <h3>Tuition Fees</h3>
            <h2>₹<?php echo number_format($total_income); ?></h2>
            <!-- <span><?php echo round($tuition_percentage, 2); ?>% of Total</span> -->
        </div>

        <div class="card">
            <h3>Admission Fees</h3>
            <h2>₹<?php echo number_format($total_admission_fees); ?></h2>
            <!-- <span><?php echo round($admission_percentage, 2); ?>% of Total</span> -->
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