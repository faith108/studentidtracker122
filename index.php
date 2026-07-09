<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mount Kenya University | Student ID Tracking and Recovery Management System</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, sans-serif;
}

body{
background:#f4f6f9;
}

/* Navigation */

nav{
background:#003366;
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 40px;
}

.logo{
display:flex;
align-items:center;
color:white;
font-size:22px;
font-weight:bold;
}

.logo img{
width:60px;
margin-right:15px;
}

nav ul{
display:flex;
list-style:none;
}

nav ul li{
margin-left:25px;
}

nav ul li a{
color:white;
text-decoration:none;
font-weight:bold;
}

nav ul li a:hover{
color:gold;
}

/* Hero */

.hero{

background:url('images/campus.jpg') center center/cover no-repeat;

height:500px;

display:flex;

justify-content:center;

align-items:center;

text-align:center;

color:white;

}

.overlay{

background:rgba(0,0,0,.60);

padding:60px;

border-radius:10px;

}

.overlay h1{

font-size:45px;

margin-bottom:20px;

}

.overlay p{

font-size:20px;

margin-bottom:30px;

}

.btn{

display:inline-block;

background:#FFD700;

color:#003366;

padding:15px 35px;

text-decoration:none;

border-radius:8px;

font-weight:bold;

margin:10px;

}

.btn:hover{

background:white;

}

/* About */

.about{

padding:60px;

text-align:center;

background:white;

}

.about h2{

color:#003366;

margin-bottom:20px;

}

.about p{

font-size:18px;

line-height:1.8;

}

/* Features */

.features{

display:grid;

grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

gap:25px;

padding:50px;

}

.card{

background:white;

padding:30px;

border-radius:10px;

box-shadow:0 0 10px lightgray;

text-align:center;

}

.card h3{

color:#003366;

margin-bottom:15px;

}

/* Contact */

.contact{

background:#003366;

color:white;

padding:40px;

text-align:center;

}

footer{

background:#001f4d;

color:white;

text-align:center;

padding:15px;

}

</style>

</head>

<body><nav class="navbar">
    <div class="logo">
        <img src="images/mku_logo.png" alt="Mount Kenya University Logo">
        <div>
            <h2>Mount Kenya University</h2>
            <p>Student ID Tracking and Recovery Management System</p>
        </div>
    </div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Student Login</a></li>
        <li><a href="admin/login.php">Admin Login</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav><section class="hero">

<div class="overlay">

<h1>STUDENT ID TRACKING AND RECOVERY MANAGEMENT SYSTEM</h1>

<p>
A secure, efficient and reliable system for reporting,
tracking and recovering lost student identification cards
at Mount Kenya University.
</p>

<div class="hero-buttons">

<a href="register.php" class="btn btn-blue">Student Registration</a>

<a href="login.php" class="btn btn-yellow">Student Login</a>

<a href="admin/login.php" class="btn btn-dark">Admin Login</a>

</div>

</div>

</section>

<nav>

<div class="logo">

<img src="images/mku_logo.png">

<span>Mount Kenya University</span>

</div>

<ul>

<li><a href="index.php">Home</a></li>

<li><a href="register.php">Register</a></li>

<li><a href="login.php">Student Login</a></li>

<li><a href="admin/login.php">Admin Login</a></li>

</ul>

</nav>

<section class="hero">

<div class="overlay">

<h1>Student ID Tracking and Recovery Management System</h1>

<p>Helping Mount Kenya University students recover lost student IDs quickly and efficiently.</p>

<a href="register.php" class="btn">Register</a>

<a href="login.php" class="btn">Student Login</a>

<a href="admin/login.php" class="btn">Admin Login</a>

</div>

</section>

<section class="about">

<h2>About the System</h2>

<p>

The Student ID Tracking and Recovery Management System is a web-based solution developed to help students report lost IDs, check recovery status, and receive notifications when their IDs are found. The system also assists university administrators in managing lost and found IDs efficiently while reducing paperwork.

</p>

</section>

<section class="features">

<div class="card">

<h3>Student Registration</h3>

<p>Create your account securely.</p>

</div>

<div class="card">

<h3>Report Lost ID</h3>

<p>Submit lost ID reports online.</p>

</div>

<div class="card">

<h3>Track Status</h3>

<p>Check whether your ID has been found.</p>

</div>

<div class="card">

<h3>Notifications</h3>

<p>Receive updates from the administrator.</p>

</div>

<div class="card">

<h3>Admin Dashboard</h3>

<p>Manage students and ID reports.</p>

</div>

<div class="card">

<h3>Reports</h3>

<p>Generate management reports instantly.</p>

</div>

</section>

<section class="contact">

<h2>Contact Information</h2>

<p>Mount Kenya University</p>

<p>Email: info@mku.ac.ke</p>

<p>Website: www.mku.ac.ke</p>

</section>

<footer>

<p><strong>Student ID Tracking and Recovery Management System</strong></p>

<p>Developed by Faith Wanjiru</p>

<p>&copy; 2026 Mount Kenya University. All Rights Reserved.</p>

</footer>

</body>
</html>