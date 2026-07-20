 <!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>School Dashboard</title>

<link rel="stylesheet" href="admin.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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


            /* MAIN CONTAINER */

            .school-container{

                margin-left:260px;
                padding:25px;

            }



            /* MAIN TITLE */

            .dashboard-title{

                color:#0b4a8b;
                font-size:32px;
                font-weight:700;
                margin-bottom:25px;

            }


            .dashboard-title i{

                color:#2563eb;
                margin-right:10px;

            }




            /* COMMON DASHBOARD CARD */

            .dashboard-card{

                background:white;

                border-radius:18px;

                padding:25px;

                margin-bottom:25px;

                box-shadow:0 6px 20px rgba(0,0,0,.08);

                border-top:5px solid #2563eb;

            }




            /* CARD HEADING */

            .card-heading{

                font-size:22px;

                font-weight:600;

                color:#0b5ed7;

                padding-bottom:15px;

                margin-bottom:20px;

                border-bottom:1px solid #e5e7eb;

            }


            .card-heading i{

                margin-right:10px;

            }





            /* SCHOOL INFO */

            .overview-grid{

                display:grid;

                grid-template-columns:repeat(4,1fr);

                gap:15px;

            }



            .info-card{

                background:#f8fafc;

                padding:15px;

                border-radius:12px;

                border-left:4px solid #2563eb;

                transition:.3s;

            }


            .info-card:hover{

                transform:translateY(-4px);

                background:#eff6ff;

            }



            .info-card h5{

                color:#64748b;

                font-size:13px;

                margin-bottom:8px;

            }



            .info-card p{

                color:#111827;

                font-size:15px;

                font-weight:600;

            }







            /* SECTION TITLE */


            .section-title{

                color:#0b4a8b;

                font-size:25px;

                margin:25px 0 15px;

            }





            /* STATISTICS */


            .statistics{

                display:grid;

                grid-template-columns:repeat(3,1fr);

                gap:20px;

                margin-bottom:25px;

            }



            .stat-card{

                background:white;

                height:110px;

                padding:20px;

                border-radius:18px;

                display:flex;

                justify-content:space-between;

                align-items:center;

                box-shadow:0 6px 18px rgba(0,0,0,.08);

                border-left:5px solid #2563eb;

                transition:.3s;

            }



            .stat-card:hover{

                transform:translateY(-5px);

            }



            .stat-card h2{

                font-size:28px;

                color:#0f172a;

            }



            .stat-card p{

                font-size:14px;

                color:#64748b;

            }



            .stat-card i{

                font-size:38px;

                color:#2563eb;

            }







            /* TABLE */


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


            .status{

                background:#16a34a;

                color:white;

                padding:6px 14px;

                border-radius:20px;

                font-size:12px;

                font-weight:600;

            }







            /* RESPONSIVE */


            @media(max-width:1100px){


            .overview-grid{

                grid-template-columns:repeat(2,1fr);

            }


            .statistics{

                grid-template-columns:repeat(2,1fr);

            }


            }




            @media(max-width:768px){


            .school-container{

                margin-left:0;

                padding:15px;

            }



            .dashboard-title{

                font-size:25px;

            }



            .overview-grid,

            .statistics{

                grid-template-columns:1fr;

            }



            .stat-card{

                height:95px;

            }



            table{

                display:block;

                overflow-x:auto;

                white-space:nowrap;

            }


            }




            @media(max-width:450px){


            .stat-card{

                padding:15px;

            }


            .stat-card h2{

                font-size:22px;

            }


            .stat-card i{

                font-size:30px;

            }


            }
</style>

</head>


<body>


            <?php include 'sidebar.php'; ?>


            <div class="school-container">


            <h1 class="dashboard-title">
            <i class="fa-solid fa-school"></i>
            School Dashboard
            </h1>



            <!-- SCHOOL OVERVIEW -->


            <div class="dashboard-card">


            <div class="card-heading">
            <i class="fa-solid fa-building"></i>
            School Overview
            </div>



            <div class="overview-grid">


            <div class="info-card">
            <h5>School Name</h5>
            <p>Netaji Subhas University</p>
            </div>


            <div class="info-card">
            <h5>School Code</h5>
            <p>NSU-001</p>
            </div>


            <div class="info-card">
            <h5>Principal Name</h5>
            <p>Dr. Rajesh Kumar</p>
            </div>


            <div class="info-card">
            <h5>Affiliated Board</h5>
            <p>UGC / AICTE</p>
            </div>


            <div class="info-card">
            <h5>Established Year</h5>
            <p>2018</p>
            </div>


            <div class="info-card">
            <h5>Address</h5>
            <p>Jamshedpur, Jharkhand</p>
            </div>


            <div class="info-card">
            <h5>Contact</h5>
            <p>+91 9876543210</p>
            </div>


            <div class="info-card">
            <h5>Email</h5>
            <p>info@nsu.edu.in</p>
            </div>


            </div>

            </div>






            <!-- STATISTICS -->


            <h2 class="section-title">
            <i class="fa-solid fa-chart-column"></i>
            School Statistics
            </h2>



            <div class="statistics">



            <div class="stat-card">

            <div>
            <h2>3500</h2>
            <p>Total Students</p>
            </div>

            <i class="fa-solid fa-user-graduate"></i>

            </div>





            <div class="stat-card">

            <div>
            <h2>180</h2>
            <p>Total Teachers</p>
            </div>

            <i class="fa-solid fa-chalkboard-user"></i>

            </div>





            <div class="stat-card">

            <div>
            <h2>45</h2>
            <p>Total Classes</p>
            </div>

            <i class="fa-solid fa-book"></i>

            </div>





            <div class="stat-card">

            <div>
            <h2>10</h2>
            <p>Departments</p>
            </div>

            <i class="fa-solid fa-building"></i>

            </div>




            <div class="stat-card">

            <div>
            <h2>₹12,50,000</h2>
            <p>Monthly Income</p>
            </div>

            <i class="fa-solid fa-indian-rupee-sign"></i>

            </div>




            <div class="stat-card">

            <div>
            <h2>26</h2>
            <p>Working Days</p>
            </div>

            <i class="fa-solid fa-calendar"></i>

            </div>


            </div>







            <!-- ACADEMIC INFORMATION -->


            <div class="dashboard-card">


            <div class="card-heading">

            <i class="fa-solid fa-book-open"></i>

            Academic Information

            </div>



            <table>


            <tr>

            <th>Information</th>
            <th>Details</th>
            <th>Status</th>

            </tr>



            <tr>

            <td>Academic Session</td>

            <td>2025 - 2026</td>

            <td>
            <span class="status">
            Active
            </span>
            </td>

            </tr>



            <tr>

            <td>Semester</td>

            <td>Semester 2</td>

            <td>
            <span class="status">
            Running
            </span>
            </td>

            </tr>



            <tr>

            <td>Exam Schedule</td>

            <td>15 December 2025</td>

            <td>
            <span class="status">
            Scheduled
            </span>
            </td>

            </tr>




            <tr>

            <td>Holiday</td>

            <td>25 December Christmas</td>

            <td>
            <span class="status">
            Upcoming
            </span>
            </td>

            </tr>



            <tr>

            <td>Events</td>

            <td>Annual Sports Meet</td>

            <td>
            <span class="status">
            Planned
            </span>
            </td>

            </tr>


            </table>



            </div>





            </div>



</body>
</html>