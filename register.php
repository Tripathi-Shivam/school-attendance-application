<?php
include("database_connection.php");

// Register teacher
if (isset($_POST["teacher_register_button"])) {
    $teacherName = mysqli_real_escape_string($con, $_POST["teacherName"]);
    $teacherEmail = mysqli_real_escape_string($con, $_POST["teacherEmail"]);
    $teacherPassword = mysqli_real_escape_string($con, $_POST["teacherPassword"]);

    $query = "INSERT INTO teacher (teacherName, teacherEmail, teacherPassword) 
        VALUES('$teacherName', '$teacherEmail', '$teacherPassword')";
    mysqli_query($con, $query);
    header("location: teacher_login.php");
}

// Register student
if (isset($_POST["student_register_button"])) {
    $studentName = mysqli_real_escape_string($con, $_POST["studentName"]);
    $studentEmail = mysqli_real_escape_string($con, $_POST["studentEmail"]);
    $studentPassword = mysqli_real_escape_string($con, $_POST["studentPassword"]);

    $query = "INSERT INTO student (studentName, studentEmail, studentPassword) 
        VALUES('$studentName', '$studentEmail', '$studentPassword')";
    mysqli_query($con, $query);
    header("location: student_login.php");
}
