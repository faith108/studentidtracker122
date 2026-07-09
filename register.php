<?php
include "config.php";

$message = "";

if (isset($_POST['register'])) {

    $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if registration number already exists
    $check = "SELECT * FROM students122 WHERE registration_number='$registration_number'";
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result) > 0) {
        $message = "Registration Number already exists!";
    } else {

        $sql = "INSERT INTO students122
        (registration_number, full_name, department, course, phone, email, password)
        VALUES
        ('$registration_number','$full_name','$department','$course','$phone','$email','$password')";

        if (mysqli_query($conn, $sql)) {
            $message = "Registration Successful!";
        } else {
            $message = "Database Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:450px;
            margin:40px auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

        h2{
            text-align:center;
            color:#0066cc;
        }

        input{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:12px;
            background:#0066cc;
            color:white;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#004c99;
        }

        .message{
            text-align:center;
            color:red;
            font-weight:bold;
            margin-bottom:15px;
        }

    </style>

</head>

<body>

<div class="container">

<h2>Student Registration</h2>

<div class="message">
<?php echo $message; ?>
</div>

<form method="POST">

<input type="text" name="registration_number" placeholder="Registration Number" required>

<input type="text" name="full_name" placeholder="Full Name" required>

<input type="text" name="department" placeholder="Department" required>

<input type="text" name="course" placeholder="Course" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<input type="email" name="email" placeholder="Email Address" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="register">Register</button>

</form>

</div>

</body>
</html>