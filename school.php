 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School Dashboard</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f4f7fc;
}

.container{
    width:95%;
    margin:30px auto;
}

h1{
    color:#1e3a8a;
    margin-bottom:25px;
}

/* Overview */

.overview{
    background:#fff;
    border-radius:12px;
    padding:25px;
    box-shadow:0 4px 12px rgba(0,0,0,.08);
    margin-bottom:30px;
}

.overview h2{
    color:#2563eb;
    margin-bottom:20px;
}

.info-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
}

.info-box{
    background:#f8f9ff;
    padding:15px;
    border-left:5px solid #2563eb;
    border-radius:8px;
}

.info-box h4{
    color:#555;
    margin-bottom:8px;
}

.info-box p{
    color:#222;
    font-weight:bold;
}

/* Statistics */

.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-bottom:30px;
}

.card{
    background:white;
    border-radius:12px;
    padding:20px;
    box-shadow:0 4px 10px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.card i{
    font-size:40px;
    color:#2563eb;
}

.card h2{
    color:#1e3a8a;
}

.card p{
    color:#666;
    margin-top:5px;
}

/* Academic */

.academic{
    background:white;
    border-radius:12px;
    padding:25px;
    box-shadow:0 4px 12px rgba(0,0,0,.08);
}

.academic h2{
    color:#2563eb;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#2563eb;
    color:white;
    padding:15px;
}

table td{
    padding:15px;
    border-bottom:1px solid #ddd;
}

table tr:hover{
    background:#f7faff;
}

.status{
    background:#16a34a;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
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

<h1>🏫 School Dashboard</h1>

<!-- School Overview -->

<div class="overview">

<h2>School Overview</h2>

<div class="info-grid">

<div class="info-box">
<h4>School Name</h4>
<p>Netaji Subhas University</p>
</div>

<div class="info-box">
<h4>School Code</h4>
<p>NSU-001</p>
</div>

<div class="info-box">
<h4>Principal Name</h4>
<p>Dr. Rajesh Kumar</p>
</div>

<div class="info-box">
<h4>Affiliated Board</h4>
<p>UGC / AICTE</p>
</div>

<div class="info-box">
<h4>Established Year</h4>
<p>2018</p>
</div>

<div class="info-box">
<h4>School Address</h4>
<p>Jamshedpur, Jharkhand</p>
</div>

<div class="info-box">
<h4>Contact Number</h4>
<p>+91 9876543210</p>
</div>

<div class="info-box">
<h4>Email</h4>
<p>info@nsu.edu.in</p>
</div>

</div>

</div>

<!-- School Statistics -->

<h1>📊 School Statistics</h1>

<div class="stats">

<div class="card">
<div>
<h2>3500</h2>
<p>Total Students</p>
</div>
<i class="fa-solid fa-user-graduate"></i>
</div>

<div class="card">
<div>
<h2>180</h2>
<p>Total Teachers</p>
</div>
<i class="fa-solid fa-chalkboard-user"></i>
</div>

<div class="card">
<div>
<h2>45</h2>
<p>Total Classes</p>
</div>
<i class="fa-solid fa-book-open"></i>
</div>

<div class="card">
<div>
<h2>10</h2>
<p>Departments</p>
</div>
<i class="fa-solid fa-building"></i>
</div>

<div class="card">
<div>
<h2>₹12,50,000</h2>
<p>Monthly Income</p>
</div>
<i class="fa-solid fa-indian-rupee-sign"></i>
</div>

<div class="card">
<div>
<h2>26</h2>
<p>Working Days</p>
</div>
<i class="fa-solid fa-calendar-days"></i>
</div>

</div>

<!-- Academic Information -->

<div class="academic">

<h2>Academic Information</h2>

<table>

<tr>
<th>Information</th>
<th>Details</th>
<th>Status</th>
</tr>

<tr>
<td>Academic Session</td>
<td>2025 - 2026</td>
<td><span class="status">Active</span></td>
</tr>

<tr>
<td>Semester</td>
<td>Semester 2</td>
<td><span class="status">Running</span></td>
</tr>

<tr>
<td>Exam Schedule</td>
<td>15 December 2025</td>
<td><span class="status">Scheduled</span></td>
</tr>

<tr>
<td>Holidays</td>
<td>25 December (Christmas)</td>
<td><span class="status">Upcoming</span></td>
</tr>

<tr>
<td>Events Calendar</td>
<td>Annual Sports Meet - 10 January</td>
<td><span class="status">Planned</span></td>
</tr>

</table>

</div>

</div>

</body>
</html>