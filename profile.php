 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#eef3f9;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .profile-container{
            width:100%;
            display:flex;
            justify-content:center;
            padding:20px;
        }

        .profile-card{
            width:700px;
            background:#fff;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 25px rgba(0,0,0,.12);
        }

        .profile-header{
            background:#0d6efd;
            color:white;
            text-align:center;
            padding:35px;
        }

        .profile-header img{
            width:150px;
            height:150px;
            border-radius:50%;
            border:5px solid white;
            object-fit:cover;
        }

        .profile-header h2{
            margin-top:15px;
            font-size:30px;
        }

        .profile-header p{
            margin-top:8px;
            color:#dbeafe;
        }

        .profile-details{
            padding:30px;
        }

        .detail{
            display:flex;
            align-items:center;
            gap:20px;
            background:#f8fafc;
            margin-bottom:15px;
            padding:18px;
            border-radius:10px;
        }

        .detail i{
            width:45px;
            height:45px;
            background:#dbeafe;
            color:#0d6efd;
            border-radius:50%;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:20px;
        }

        .detail span{
            font-size:16px;
            color:#334155;
        }

        .buttons{
            display:flex;
            justify-content:center;
            gap:20px;
            padding:25px;
            border-top:1px solid #ddd;
        }

        button{
            border:none;
            padding:13px 28px;
            background:#0d6efd;
            color:white;
            font-size:15px;
            border-radius:8px;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#084298;
        }

        .password{
            background:#198754;
        }

        .password:hover{
            background:#146c43;
        }

        @media(max-width:768px){

        .profile-card{
            width:100%;
        }

        .profile-header img{
            width:120px;
            height:120px;
        }

        .buttons{
            flex-direction:column;
        }

        button{
            width:100%;
        }

        .detail{
            flex-direction:column;
            text-align:center;
        }

        }
</style>

</head>
<body>

<div class="profile-container">

    <div class="profile-card">

        <div class="profile-header">

            <img src="images/user.png" alt="Profile">

            <h2>Rahul Sharma</h2>

            <p>Computer Science Teacher</p>

        </div>

        <div class="profile-details">

            <div class="detail">
                <i class="fa-solid fa-id-card"></i>
                <span><b>ID :</b> T001</span>
            </div>

            <div class="detail">
                <i class="fa-solid fa-envelope"></i>
                <span><b>Email :</b> rahul@gmail.com</span>
            </div>

            <div class="detail">
                <i class="fa-solid fa-phone"></i>
                <span><b>Phone :</b> 9876543210</span>
            </div>

            <div class="detail">
                <i class="fa-solid fa-book"></i>
                <span><b>Department :</b> Computer Science</span>
            </div>

            <div class="detail">
                <i class="fa-solid fa-user-graduate"></i>
                <span><b>Qualification :</b> MCA</span>
            </div>

            <div class="detail">
                <i class="fa-solid fa-briefcase"></i>
                <span><b>Experience :</b> 5 Years</span>
            </div>

            <div class="detail">
                <i class="fa-solid fa-location-dot"></i>
                <span><b>Address :</b> Jamshedpur</span>
            </div>

        </div>

        <div class="buttons">

            <button>Edit Profile</button>

            <button class="password">
                Change Password
            </button>

        </div>

    </div>

</div>

</body>
</html>