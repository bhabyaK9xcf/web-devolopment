<?php
$host = "localhost"; 
$username = "bhabya"; 
$password = "bhabya123"; 
$database = "test1"; 


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$f_name = $_POST['first_name'];
$dob= $_POST['dob'];
$gender= $_POST['gender'];
$adress= $_POST['adress'];
$Email= $_POST['Email'];
$ph_no= $_POST['ph_no'];
$employee_id= $_POST['employee_id'];
$job_title= $_POST['job_title'];
$department= $_POST['department'];


$sql = "INSERT INTO employees (f_name, dob, gender,adress,email,ph_no,employee_id,job_title, department) VALUES ('$f_name', '$dob', '$gender', '$adress','$ph_no','$employee_id','$job_title','$department')";

if ($conn->query($sql) === TRUE) {
    echo "Employee record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
