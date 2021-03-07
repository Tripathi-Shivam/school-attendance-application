<?php
include("database_connection.php");
if (isset($_POST["button_action"])) {
    $student_id = "";
    $attendance_date = $_POST["attendance_date"];
    $teacher_id = $_SESSION["teacher_id"];

    $sub_query = "SELECT * FROM student";
    $result = mysqli_query($con, $sub_query);
    foreach ($result as $student) {
        $student_id = $student["student_id"];
        $attendance_status = $_POST["attendance_status" . $student["student_id"]];

        $query = "INSERT INTO attendance (student_id, attendance_status, attendance_date, teacher_id)  VALUES ($student_id, '$attendance_status', '$attendance_date', $teacher_id);";
        mysqli_query($con, $query);
    }
    echo json_encode("Attendance marked.");
}
