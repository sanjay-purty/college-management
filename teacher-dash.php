<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teacher Dashboard</title>

<style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#eef2f7;
        }

        .container{
            width:95%;
            margin:30px auto;
        }

        h1{
            text-align:center;
            color:#1e3a8a;
            margin-bottom:30px;
        }

        .dashboard{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(330px,1fr));
            gap:25px;
        }

        .card{
            background:#fff;
            border-radius:12px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
            padding:20px;
        }

        .card h2{
            color:#2563eb;
            margin-bottom:18px;
            border-bottom:2px solid #eee;
            padding-bottom:10px;
        }

        ul{
            list-style:none;
        }

        ul li{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:12px 0;
            border-bottom:1px solid #eee;
        }

        ul li:last-child{
            border:none;
        }

        .btn{
            padding:8px 16px;
            border:none;
            background:#2563eb;
            color:#fff;
            border-radius:6px;
            cursor:pointer;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        .status{
            padding:5px 12px;
            border-radius:20px;
            color:white;
            font-size:13px;
        }

        .present{
            background:#16a34a;
        }

        .leave{
            background:#f59e0b;
        }

        .salary{
            color:#16a34a;
            font-weight:bold;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:15px;
        }

        table th{
            background:#2563eb;
            color:white;
            padding:10px;
        }

        table td{
            text-align:center;
            padding:10px;
            border-bottom:1px solid #ddd;
        }

        table tr:hover{
            background:#f8f9ff;
        }

        @media(max-width:768px){

        table{
        display:block;
        overflow-x:auto;
        }

        }

</style>

</head>

    <body>

            <div class="container">

            <h1>Teacher Dashboard</h1>

            <div class="dashboard">

            <!-- Teacher Attendance -->

            <div class="card">

            <h2>Teacher Attendance</h2>

            <ul>

            <li>
            <span>Today's Attendance</span>
            <span class="status present">Present</span>
            </li>

            <li>
            <span>Monthly Attendance</span>
            <span>25 / 30 Days</span>
            </li>

            <li>
            <span>Attendance Report</span>
            <button class="btn">View</button>
            </li>

            </ul>

            </div>

            <!-- Student Attendance -->

            <div class="card">

            <h2>Student Attendance</h2>

            <ul>

            <li>
            <span>Mark Attendance</span>
            <button class="btn">Mark</button>
            </li>

            <li>
            <span>Edit Attendance</span>
            <button class="btn">Edit</button>
            </li>

            <li>
            <span>Attendance Report</span>
            <button class="btn">View</button>
            </li>

            <li>
            <span>Monthly Attendance</span>
            <button class="btn">Monthly</button>
            </li>

            </ul>

            </div>

            <!-- Leave Management -->

            <div class="card">

            <h2>Leave Management</h2>

            <ul>

            <li>
            <span>Apply Leave</span>
            <button class="btn">Apply</button>
            </li>

            <li>
            <span>Leave History</span>
            <button class="btn">History</button>
            </li>

            <li>
            <span>Leave Status</span>
            <span class="status leave">Pending</span>
            </li>

            </ul>

            </div>

            <!-- Salary Details -->

            <div class="card">

            <h2>Salary Details</h2>

            <ul>

            <li>
            <span>Monthly Salary</span>
            <span class="salary">₹55,000</span>
            </li>

            <li>
            <span>Salary Slip</span>
            <button class="btn">Download</button>
            </li>

            <li>
            <span>Bonus</span>
            <span class="salary">₹5,000</span>
            </li>

            </ul>

            </div>

            <!-- Class Routine -->

            <div class="card">

            <h2>Daily Timetable</h2>

            <table>

            <tr>
            <th>Time</th>
            <th>Class</th>
            <th>Subject</th>
            </tr>

            <tr>
            <td>09:00 AM</td>
            <td>BCA-I</td>
            <td>Programming</td>
            </tr>

            <tr>
            <td>10:00 AM</td>
            <td>BCA-II</td>
            <td>DBMS</td>
            </tr>

            <tr>
            <td>11:30 AM</td>
            <td>B.Tech</td>
            <td>Java</td>
            </tr>

            <tr>
            <td>02:00 PM</td>
            <td>MCA</td>
            <td>Python</td>
            </tr>

            </table>

            </div>

            <!-- Weekly Timetable -->

            <div class="card">

            <h2>Weekly Schedule</h2>

            <table>

            <tr>
            <th>Day</th>
            <th>Classes</th>
            </tr>

            <tr>
            <td>Monday</td>
            <td>4 Classes</td>
            </tr>

            <tr>
            <td>Tuesday</td>
            <td>5 Classes</td>
            </tr>

            <tr>
            <td>Wednesday</td>
            <td>4 Classes</td>
            </tr>

            <tr>
            <td>Thursday</td>
            <td>5 Classes</td>
            </tr>

            <tr>
            <td>Friday</td>
            <td>3 Classes</td>
            </tr>

            <tr>
            <td>Saturday</td>
            <td>2 Classes</td>
            </tr>

            </table>

            </div>

            <!-- Assigned Classes -->

            <div class="card">

            <h2>Assigned Classes</h2>

            <ul>

            <li>
            <span>BCA 1st Year</span>
            <span>Programming</span>
            </li>

            <li>
            <span>BCA 2nd Year</span>
            <span>DBMS</span>
            </li>

            <li>
            <span>B.Tech CSE</span>
            <span>Java</span>
            </li>

            <li>
            <span>MCA</span>
            <span>Python</span>
            </li>

            </ul>

            </div>

            </div>

            </div>

    </body>
</html>