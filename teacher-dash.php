 <!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Teacher Dashboard</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

 <style>
            /* ===============================
                    TEACHER DASHBOARD CSS
            ================================ */

            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
                font-family:'Poppins',sans-serif;
            }


            body{

                background:#f5f6fa;
                color:#334155;

            }



            /* ===============================
                    MAIN AREA
            ================================ */


            .teacher-main{

                margin-left:270px;
                padding:35px;

            }



            /* ===============================
                    TOP HEADER
            ================================ */


            .top-header{

                background:#0d478a;

                color:white;

                padding:35px 40px;

                border-radius:0 0 20px 20px;

                display:flex;

                justify-content:space-between;

                align-items:center;

                margin-bottom:35px;

                box-shadow:0 6px 20px rgba(0,0,0,.12);

            }



            .top-header h1{

                font-size:36px;

                color:white;

            }



            .top-header p{

                color:#dbeafe;

                margin-top:5px;

            }



            /* PROFILE */


            .profile{

                display:flex;

                align-items:center;

                gap:15px;

            }



            .profile img{

                width:65px;

                height:65px;

                border-radius:50%;

                border:3px solid white;

            }



            .profile h4{

                color:white;

                font-size:18px;

            }


            .profile span{

                font-size:13px;

                color:#dbeafe;

            }





            /* ===============================
                    STAT CARDS
            ================================ */


            .stats{

                display:grid;

                grid-template-columns:repeat(4,1fr);

                gap:25px;

                margin-bottom:35px;

            }



            .stat-card{

                background:white;

                padding:25px;

                border-radius:20px;

                display:flex;

                align-items:center;

                gap:20px;

                box-shadow:0 6px 20px rgba(0,0,0,.08);

                transition:.3s;

            }



            .stat-card:hover{

                transform:translateY(-5px);

            }



            .stat-card i{

                width:65px;

                height:65px;

                border-radius:15px;

                background:#dbeafe;

                color:#0d478a;

                display:flex;

                justify-content:center;

                align-items:center;

                font-size:30px;

            }



            .stat-card h2{

                font-size:28px;

                color:#0d478a;

            }



            .stat-card p{

                color:#64748b;

            }





            /* ===============================
                    GRID BOX
            ================================ */


            .dashboard-grid{

                display:grid;

                grid-template-columns:repeat(2,1fr);

                gap:25px;

            }



            .box{

                background:white;

                padding:30px;

                border-radius:20px;

                box-shadow:0 6px 20px rgba(0,0,0,.08);

            }



            .box-title{

                margin-bottom:20px;

            }



            .box-title h2{

                font-size:24px;

                color:#0d478a;

            }



            .box-title i{

                color:#0d478a;

                margin-right:10px;

            }





            /* ===============================
                    TABLE
            ================================ */


            table{

                width:100%;

                border-collapse:collapse;

            }



            table th{

                background:#0d478a;

                color:white;

                padding:16px;

                text-align:left;

            }



            table td{

                padding:15px;

                border-bottom:1px solid #ddd;

            }



            table tr:hover{

                background:#eef6ff;

            }





            /* STATUS */


            .active{

                background:#dcfce7;

                color:#15803d;

                padding:6px 12px;

                border-radius:20px;

                font-size:13px;

            }



            .pending{

                background:#fef3c7;

                color:#b45309;

                padding:6px 12px;

                border-radius:20px;

                font-size:13px;

            }





            /* ===============================
                    BUTTON
            ================================ */


            button{

                border:none;

                background:#28a745;

                color:white;

                padding:12px 25px;

                border-radius:8px;

                cursor:pointer;

                font-weight:600;

                transition:.3s;

            }



            button:hover{

                background:#218838;

            }





            /* ===============================
                    ATTENDANCE
            ================================ */


            .action-row{

                display:flex;

                justify-content:space-between;

                align-items:center;

                padding:18px 0;

                border-bottom:1px solid #e2e8f0;

            }



            .action-row h3{

                color:#0d478a;

            }



            .action-row p{

                color:#64748b;

            }





            /* ===============================
                    LEAVE
            ================================ */


            .leave-item{

                display:flex;

                justify-content:space-between;

                padding:16px 0;

                border-bottom:1px solid #e2e8f0;

            }



            .yellow{

                color:#f59e0b;

            }





            /* ===============================
                    SUBJECT
            ================================ */


            .subject-list{

                list-style:none;

            }



            .subject-list li{

                display:flex;

                justify-content:space-between;

                padding:15px;

                background:#f8fafc;

                margin-bottom:10px;

                border-radius:10px;

            }



            .subject-list span{

                color:#0d478a;

                font-weight:600;

            }





            /* ===============================
                    SALARY
            ================================ */


            .salary{

                text-align:center;

            }



            .salary h3{

                font-size:38px;

                color:#0d478a;

            }



            .salary p{

                color:#64748b;

            }





            /* ===============================
                    NOTICE
            ================================ */


            .notice{

                list-style:none;

            }



            .notice li{

                padding:15px;

                background:#eef6ff;

                margin-bottom:12px;

                border-radius:10px;

                color:#0d478a;

            }





            /* ===============================
                    RESPONSIVE
            ================================ */


            @media(max-width:1200px){


            .stats{

                grid-template-columns:repeat(2,1fr);

            }


            .dashboard-grid{

                grid-template-columns:1fr;

            }


            }



            @media(max-width:992px){


            .teacher-main{

                margin-left:90px;

            }


            }



            @media(max-width:768px){


            .teacher-main{

                margin-left:0;

                padding:20px;

            }



            .top-header{

                flex-direction:column;

                gap:20px;

                text-align:center;

            }



            .profile{

                flex-direction:column;

            }



            .stats{

                grid-template-columns:1fr;

            }



            .dashboard-grid{

                grid-template-columns:1fr;

            }



            .action-row,
            .leave-item{

                flex-direction:column;

                align-items:flex-start;

                gap:15px;

            }



            button{

                width:100%;

            }



            table{

                display:block;

                overflow-x:auto;

                white-space:nowrap;

            }


            }
 </style>

</head>


<body>


<?php include 'sidebar.php'; ?>


<div class="teacher-main">


<!-- Top Header -->

<div class="top-header">

<div>
<h1>Teacher Dashboard</h1>
<p>Welcome back, Professor 👋</p>
</div>


<div class="profile">

<img src="images/user.png">

<div>
<h4>Rahul Sharma</h4>
<span>Computer Science Teacher</span>
</div>

</div>

</div>



<!-- Statistics -->


<div class="stats">


<div class="stat-card">

<i class="fa-solid fa-book"></i>

<div>
<h2>06</h2>
<p>Today's Classes</p>
</div>

</div>



<div class="stat-card">

<i class="fa-solid fa-user-graduate"></i>

<div>
<h2>120</h2>
<p>Total Students</p>
</div>

</div>



<div class="stat-card">

<i class="fa-solid fa-calendar-check"></i>

<div>
<h2>95%</h2>
<p>Attendance</p>
</div>

</div>



<div class="stat-card">

<i class="fa-solid fa-money-bill"></i>

<div>
<h2>₹55,000</h2>
<p>Monthly Salary</p>
</div>

</div>


</div>





<!-- Main Grid -->


<div class="dashboard-grid">



<!-- Timetable -->

<div class="box">

<div class="box-title">
<h2>
<i class="fa-solid fa-clock"></i>
Today's Timetable
</h2>
</div>


<table>

<tr>
<th>Time</th>
<th>Class</th>
<th>Subject</th>
<th>Status</th>
</tr>


<tr>

<td>09:00 AM</td>
<td>BCA-I</td>
<td>Programming</td>
<td>
<span class="active">Running</span>
</td>

</tr>


<tr>

<td>10:30 AM</td>
<td>BCA-II</td>
<td>DBMS</td>
<td>
<span class="pending">Upcoming</span>
</td>

</tr>



<tr>

<td>12:00 PM</td>
<td>MCA</td>
<td>Python</td>
<td>
<span class="pending">Upcoming</span>
</td>

</tr>


</table>

</div>





<!-- Attendance -->


<div class="box">

<div class="box-title">

<h2>
<i class="fa-solid fa-user-check"></i>
Student Attendance
</h2>

</div>



<div class="action-row">

<div>
<h3>Today's Attendance</h3>
<p>110 / 120 Students Present</p>
</div>


<button>
Mark Attendance
</button>


</div>



<div class="action-row">

<div>
<h3>Attendance Report</h3>
<p>Monthly student report</p>
</div>


<button>
View Report
</button>


</div>


</div>






<!-- Leave -->


<div class="box">


<div class="box-title">

<h2>
<i class="fa-solid fa-file"></i>
Leave Management
</h2>

</div>



<div class="leave-item">

<span>Apply New Leave</span>

<button>
Apply
</button>

</div>



<div class="leave-item">

<span>Leave History</span>

<button>
View
</button>

</div>



<div class="leave-item">

<span>Status</span>

<strong class="yellow">
Pending
</strong>

</div>



</div>







<!-- Subjects -->


<div class="box">


<div class="box-title">

<h2>
<i class="fa-solid fa-graduation-cap"></i>
Assigned Subjects
</h2>

</div>



<ul class="subject-list">


<li>
Programming
<span>BCA-I</span>
</li>


<li>
Database Management
<span>BCA-II</span>
</li>


<li>
Java Programming
<span>B.Tech</span>
</li>


<li>
Python
<span>MCA</span>
</li>


</ul>



</div>





<!-- Salary -->


<div class="box">


<div class="box-title">

<h2>
<i class="fa-solid fa-wallet"></i>
Salary Details
</h2>

</div>



<div class="salary">


<h3>
₹55,000
</h3>

<p>
Monthly Salary
</p>


<button>
Download Slip
</button>


</div>



</div>








<!-- Notice -->


<div class="box">


<div class="box-title">

<h2>
<i class="fa-solid fa-bullhorn"></i>
Latest Notices
</h2>

</div>



<ul class="notice">


<li>
Semester Exam Schedule Released
</li>


<li>
Faculty Meeting Tomorrow
</li>


<li>
Holiday on Saturday
</li>


</ul>


</div>




</div>



</div>



</body>

</html>