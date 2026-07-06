<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Portal</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .header {
        background: #004080;
        color: white;
        text-align: center;
        padding: 15px;
    }

    .container {
        max-width: 1000px;
        margin: 20px auto;
        padding: 20px;
    }
    .note{
    margin-top:20px;
    padding:15px;
    background:#eef6ff;
    border-left:5px solid #003366;
    }

    .card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    h2 {
        color: #004080;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ddd;
        padding: 10px;
    }

    table th {
        background: #004080;
        color: white;
    }

    .btn {
        display: inline-block;
        background: #28a745;
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    .btn:hover {
        background: #218838;
    }
</style>
</head>
<body>

<div class="header">
    <h1>Student Dashboard</h1>
</div>

<div class="container">

    <!-- Admission Form -->
    <div class="card">
        <h2>Admission Form</h2>
        <p>Your admission form is available for download.</p>

        <a href="students-add.php" class="btn">
            View Admission Form
        </a>
    </div>

    <!-- payment fee -->
     <div class="card">
        <h2>Fee Payment</h2>

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

        <a href="studentfee.php" class="btn">
            Payment
        </a>
    </div>

    <!-- Payment Receipt -->
    <div class="card">
        <h2>Payment Receipt</h2>

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

        <a href="id-verify.php" class="btn" target="_blank">
            Download Receipt
        </a>
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
            <div class="note">
                <h3>Important Notes:</h3>
                <ul>
                <li>Hostel Fee (Optional): ₹40,000 per year</li>
                <li>Transport Fee (Optional): ₹15,000 per year</li>
                <li>Library & Sports Fee are included in the Tuition Fee.</li>
                <li>Fees once paid are non-refundable.</li>
                </ul>
            </div>
    </div>
    

</div>

</body>
</html>