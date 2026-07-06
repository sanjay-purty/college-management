<?php

include 'db.php';
session_start();

if(!isset($_SESSION['username']))
    {
    header("Location: login.php");
    exit();
    }

    $detail = "SELECT * FROM `students_details`";

    $result = mysqli_query($conn, $detail);

    $teacher = "SELECT * FROM `teachers_details`";

    $res = mysqli_query($conn, $teacher);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <h1 class="logo">Brand</h1>

            <ul>
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa-solid fa-table-columns"></i> Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="student-de.php">
                            <i class="fa-solid fa-user-graduate"></i> Students
                        </a>
                    </li>

                    <li>
                        <a href="teacher-dash.php">
                            <i class="fa-solid fa-chalkboard-user"></i> Teachers
                        </a>
                    </li>

                    <li>
                        <a href="school.php">
                            <i class="fa-solid fa-school"></i> Schools
                        </a>
                    </li>

                    <li>
                        <a href="income.php">
                            <i class="fa-solid fa-money-bill"></i> Income
                        </a>
                    </li>

                    <li>
                        <a href="help.php">
                            <i class="fa-solid fa-circle-question"></i> Help
                        </a>
                    </li>

                    <li>
                        <a href="logout.php">
                            <i class="fa-solid fa-gear"></i> Logout
                        </a>
                    </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">

            <!-- Topbar -->
            <div class="topbar">

                <div class="search-box">
                    <input type="text" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

                <div class="top-right">
                    <button class="add-btn"  onclick="window.location.href='students-add.php'">Add Students</button>
                    
                </div>

                 <div class="top-right">
                    <button class="add-btn"  onclick="window.location.href='add_teachers.php'">Add Teacher</button>
                    <i class="fa-regular fa-bell"></i>
                    <img src="https://i.pravatar.cc/40" alt="">
                </div>

            </div>

            <!-- Cards -->
            <div class="cards">

                <div class="card">
                    <div>
                        <h2></h2>
                        <p>Students</p>
                    </div>
                    <i class="fa-solid fa-user-graduate"></i>
                </div>

                <div class="card">
                    <div>
                        <h2></h2>
                        <p>Teachers</p>
                    </div>
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>

                <div class="card">
                    <div>
                        <h2></h2>
                        <p>Schools</p>
                    </div>
                    <i class="fa-solid fa-school"></i>
                </div>

                <div class="card">
                    <div>
                        <h2></h2>
                        <p>Income</p>
                    </div>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>

            </div>

            <!-- Bottom Section -->
            <div class="bottom-section">

                <!-- Students Details -->
                <div class="payments">

                    <div class="section-header">
                        <h3>Students Details</h3>
                        <button>View All</button>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>class</th>
                                <th>phone</th>
                                <th>state</th>
                                <th>View</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($result))
                                { 
                        ?>
                                <tr>
                                    <td><?php echo $row['Fname'] . ' ' . $row['Lname']; ?></td>
                                    <td><?php echo $row['Class']; ?></td>
                                    <td><?php echo $row['Phone']; ?></td>
                                    <td><?php echo $row['State']; ?></td>

                                    <td>
                                        <a href="view.php?id=<?php echo $row['id'];?>" class="view-btn">
                                             View
                                        </a>
                                    </td>

                                     <td>
                                        <a href="edit.php?id=<?php echo $row['id'];?>" class="edit-btn">
                                             Edit 
                                        </a>
                                    </td>
                                </tr>
                        <?php
                                 }
                        ?>

                        </tbody>
                    </table>

                </div>

                <!-- New Students -->
                <div class="students">

                    <div class="section-header">
                        <h3>New Students</h3>
                        <button>View All</button>
                    </div>

                    <div class="student">
                        <img src="https://i.pravatar.cc/40?img=1">
                        <span>John Steve Doe</span>
                        <i class="fa-regular fa-id-badge"></i>
                    </div>

                </div>

                 <!-- Teachers Details -->
                <div class="payments">

                    <div class="section-header">
                        <h3>Teachers Details</h3>
                        <button>View All</button>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Teacher Name</th>
                                <th>Gender</th>
                                <th>phone</th>
                                <th>Joining Date</th>
                                <th>View</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($res))
                                { 
                        ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['number']; ?></td>
                                    <td><?php echo $row['joining']; ?></td>

                                    <td>
                                        <a href="teacherview.php?id=<?php echo $row['id']; ?>" class="view-btn">
                                             View
                                        </a>
                                    </td>

                                     <td>
                                        <a href="teacheredit.php?id=<?php echo $row['id']; ?>" class="edit-btn">
                                             Edit 
                                        </a>
                                    </td>
                                </tr>

                        <?php
                                 }
                        ?>

                        </tbody>
                    </table>

            </div>

            

        </main>

    </div>

</body>

</html>