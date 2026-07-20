<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Portal</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
        body{
                background:#f5f6fa;
            }


            /* HEADER */

            .header{

                margin-left:270px;

                background:#0d478a;

                color:white;

                padding:55px 25px;

                text-align:center;

                border-radius:0;

                box-shadow:none;

            }


            .header h1{

                font-size:38px;

                font-weight:700;

            }



            /* MAIN CONTENT */

            .main-content{

                margin-left:270px;

                padding:70px 35px;

            }



            /* CARD DESIGN */

            .card{

                background:#ffffff;

                border-radius:20px;

                padding:35px;

                margin-bottom:35px;

                border-left:none;

                box-shadow:0 6px 20px rgba(0,0,0,.08);

                transition:.3s;

            }



            .card:hover{

                transform:translateY(-3px);

            }



            .card h2{

                color:#0d478a;

                font-size:30px;

                margin-bottom:25px;

                font-weight:700;

            }



            /* CARD ROW */

            .card-row{

                display:flex;

                justify-content:space-between;

                align-items:center;

                gap:30px;

            }



            /* BUTTON */

            .btn{

                display:inline-flex;

                justify-content:center;

                align-items:center;

                min-width:170px;

                padding:16px 25px;

                background:#28a745;

                color:white;

                text-decoration:none;

                border-radius:8px;

                font-weight:500;

                font-size:20px;

            }



            .btn:hover{

                background:#218838;

            }



            /* TABLE */

            table{

                width:100%;

                border-collapse:collapse;

                margin-top:15px;

            }



            table th{

                background:#0d478a;

                color:white;

                padding:18px;

                text-align:left;

                font-size:18px;

            }



            table td{

                padding:10px;

                border:1px solid #ddd;

                color:#333;

                font-size:17px;

            }



            table tr:nth-child(even){

                background:#fafafa;

            }



            table tr:hover{

                background:#eef6ff;

            }



            /* NOTES */

            .note{

                background:#eef6ff;

                border-left:5px solid #0d478a;

                padding:25px;

                border-radius:12px;

                margin-top:25px;

            }



            .note h3{

                color:#0d478a;

                margin-bottom:15px;

            }


            .note li{

                margin-bottom:10px;

                color:#475569;

            }



            /* PAYMENT */

            .paid{

                color:#16a34a;

                font-weight:700;

            }



            /* MOBILE */

            @media(max-width:992px){

            .header{

                margin-left:90px;

            }


            .main-content{

                margin-left:90px;

            }

            }



            @media(max-width:768px){


            .header{

                margin-left:0;

                padding:45px 15px;

            }


            .header h1{

                font-size:28px;

            }


            .main-content{

                margin-left:0;

                padding:35px;

            }


            .card-row{

                flex-direction:column;

                align-items:stretch;

            }


            .card-right{

                width:100%;

            }


            .btn{

                width:100%;

            }


            table{

                display:block;

                overflow-x:auto;

                white-space:nowrap;

            }


            .card h2{

                font-size:25px;

            }

            }



            @media(max-width:450px){


            .card{

                padding:25px;

            }


            .header h1{

                font-size:24px;

            }


            .main-content{

                padding:20px;

            }

            }
</style>
</head>
<body>

      <?php include 'sidebar.php'; ?>

<div class="header">
    <h1>Student Dashboard</h1>
</div>

        <div class="main-content">

                   <!-- Admission Form -->
                        <div class="card">

                            <div class="card-row">

                                <div class="card-left">
                                    <h2>Admission Form</h2>
                                    <p>Your admission form is available for download.</p>
                                </div>

                                <div class="card-right">
                                    <a href="students-add.php" class="btn">
                                        View Admission Form
                                    </a>
                                </div>

                            </div>

                        </div>

                        <!-- Fee Payment -->
                        <div class="card">

                            <h2>Fee Payment</h2>

                            <div class="card-row">

                                <div class="card-left">

                                    <table>
                                        <tr>
                                            <th>Receipt No.</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>

                                        <tr>
                                            <td>REC2026001</td>
                                            <td>20 June 2026</td>
                                            <td>₹25,000</td>
                                            <td style="color:green;">Paid</td>
                                        </tr>
                                    </table>

                                </div>

                                <div class="card-right">
                                    <a href="studentfee.php" class="btn">
                                        Payment
                                    </a>
                                </div>

                            </div>

                        </div>

                        <!-- Payment Receipt -->
                        <div class="card">

                            <h2>Payment Receipt</h2>

                            <div class="card-row">

                                <div class="card-left">

                                    <table>
                                        <tr>
                                            <th>Receipt No.</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>

                                        <tr>
                                            <td>REC2026001</td>
                                            <td>20 June 2026</td>
                                            <td>₹25,000</td>
                                            <td style="color:green;">Paid</td>
                                        </tr>
                                    </table>

                                </div>

                                <div class="card-right">
                                    <a href="id-verify.php" class="btn" target="_blank">
                                        Download Receipt
                                    </a>
                                </div>

                            </div>

                        </div>

                    <!-- Academic Information -->
                    <div class="card">
                        <h2> Fee Structure (Academic Session 2026–27)</h2>
                                
                        <table>
                            <tr>
                                <th>S.No.</th>
                                <th>Course</th>
                                <th>Duration</th>
                                <th>Admission Fee</th>
                                <th>Tuition Fee (Yearly)</th>
                                <th>Exam Fee</th>
                                <th>Total Fee (Yearly)</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>BCA</td>
                                <td>3 Years</td>
                                <td>₹5,000</td>
                                <td>₹35,000</td>
                                <td>₹2,000</td>
                                <td>₹42,000</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>MCA</td>
                                <td>2 Years</td>
                                <td>₹7,000</td>
                                <td>₹55,000</td>
                                <td>₹2,500</td>
                                <td>₹64,500</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>B.Tech</td>
                                <td>4 Years</td>
                                <td>₹10,000</td>
                                <td>₹85,000</td>
                                <td>₹3,000</td>
                                <td>₹98,000</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>M.Tech</td>
                                <td>2 Years</td>
                                <td>₹10,000</td>
                                <td>₹70,000</td>
                                <td>₹3,000</td>
                                <td>₹83,000</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>B.Com</td>
                                <td>3 Years</td>
                                <td>₹4,000</td>
                                <td>₹20,000</td>
                                <td>₹1,500</td>
                                <td>₹25,500</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>BBA</td>
                                <td>3 Years</td>
                                <td>₹5,000</td>
                                <td>₹30,000</td>
                                <td>₹2,000</td>
                                <td>₹37,000</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>BA</td>
                                <td>3 Years</td>
                                <td>₹3,000</td>
                                <td>₹15,000</td>
                                <td>₹1,000</td>
                                <td>₹19,000</td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>B.Sc</td>
                                <td>3 Years</td>
                                <td>₹5,000</td>
                                <td>₹28,000</td>
                                <td>₹2,000</td>
                                <td>₹35,000</td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>M.Sc</td>
                                <td>2 Years</td>
                                <td>₹6,000</td>
                                <td>₹40,000</td>
                                <td>₹2,000</td>
                                <td>₹48,000</td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>Diploma (Polytechnic)</td>
                                <td>3 Years</td>
                                <td>₹5,000</td>
                                <td>₹25,000</td>
                                <td>₹1,500</td>
                                <td>₹31,500</td>
                            </tr>

                        </table>
                        </div>
                            <div class="note">
                                <h3>Important Notes:</h3>
                                <ul>
                                <li>Hostel Fee (Optional): ₹40,000 per year</li>
                                <li>Transport Fee (Optional): ₹15,000 per year</li>
                                <li>Library & Sports Fee are included in the Tuition Fee.</li>
                                <li>Fees once paid are non-refundable.</li>
                                </ul>
                            </div>
                            
                    <!-- </div> -->
        
        </div>
</body>
</html>