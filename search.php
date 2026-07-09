<?php
include "config.php";

$result = "";

if (isset($_POST['search'])) {

    $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);

    $sql = "SELECT students122.full_name,
                   students122.registration_number,
                   lost_ids.date_lost,
                   lost_ids.place_lost,
                   lost_ids.description,
                   lost_ids.status
            FROM students122
            INNER JOIN lost_ids
            ON students122.id = lost_ids.student_id
            WHERE students122.registration_number='$registration_number'
            ORDER BY lost_ids.id DESC
            LIMIT 1";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die("SQL Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($query) > 0) {

        $row = mysqli_fetch_assoc($query);

        $result = "
        <table width='100%' border='1' cellpadding='10' cellspacing='0'>

            <tr>
                <th align='left'>Student Name</th>
                <td>{$row['full_name']}</td>
            </tr>

            <tr>
                <th align='left'>Registration Number</th>
                <td>{$row['registration_number']}</td>
            </tr>

            <tr>
                <th align='left'>Date Lost</th>
                <td>{$row['date_lost']}</td>
            </tr>

            <tr>
                <th align='left'>Place Lost</th>
                <td>{$row['place_lost']}</td>
            </tr>

            <tr>
                <th align='left'>Description</th>
                <td>{$row['description']}</td>
            </tr>

            <tr>
                <th align='left'>Status</th>
                <td><b>{$row['status']}</b></td>
            </tr>

        </table>";

    } else {

        $result = "<h3 style='color:red;'>No Lost Student ID Found.</h3>";

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Search Student ID</title>

<style>

body{
    background:#f4f4f4;
    font-family:Arial;
}

.container{

    width:600px;
    margin:50px auto;
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
    margin-bottom:15px;

}

button{

    width:100%;
    padding:12px;
    background:#0066cc;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;

}

button:hover{

    background:#004999;

}

.result{

    margin-top:20px;

}

table{

    border-collapse:collapse;

}

th{

    background:#0066cc;
    color:white;

}

td{

    background:#fafafa;

}

</style>

</head>

<body>

<div class="container">

<h2>Search Student ID</h2>

<form method="POST">

<input
type="text"
name="registration_number"
placeholder="Enter Registration Number"
required>

<button
type="submit"
name="search">
Search
</button>

</form>

<div class="result">

<?php echo $result; ?>

</div>

</div>

</body>

</html>
