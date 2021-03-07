<?php
include("database_connection.php");

session_start();

// Login teacher
if (isset($_POST["teacher_login_button"])) {
    $teacherName = mysqli_real_escape_string($con, $_POST["teacherNameLogin"]);
    $teacherPassword = mysqli_real_escape_string($con, $_POST["teacherPasswordLogin"]);

    $query = "SELECT * FROM teacher WHERE teacherName='$teacherName' AND teacherPassword='$teacherPassword'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        foreach ($result as $teacher) {
            $_SESSION["teacher_id"] = $teacher["teacher_id"];
        }
        header('location: teacher_home.php');
    } else {
?> <script>
            window.alert("Wrong name/password combination.");
        </script>
    <?php
    }
}

// Login student
if (isset($_POST["student_login_button"])) {
    $studentName = mysqli_real_escape_string($con, $_POST["studentNameLogin"]);
    $studentPassword = mysqli_real_escape_string($con, $_POST["studentPasswordLogin"]);

    $query = "SELECT * FROM student WHERE studentName='$studentName' AND studentPassword='$studentPassword'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        foreach ($result as $student) {
            $_SESSION["student_id"] = $student["student_id"];
        }
        header('location: student_home.php');
    } else {
    ?> <script>
            window.alert("Wrong name/password combination.");
        </script>
<?php
    }
}
?>