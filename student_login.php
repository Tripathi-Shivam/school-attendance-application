<?php
include("main_nav.php");
include("login.php");

// session_start();

if (isset($_SESSION["student_id"])) {
    header("location:student_home.php");
}
?>

<form method="post" onsubmit="return validateStudentLoginInput()">
    <!-- Student login -->
    <div class="container card shadow mt-4" id="studentLoginDiv">
        <h1 class="text-center m-3">Student Login</h1>

        <div class="card-body">
            <div class="form-floating ">
                <input type="text" class="form-control" id="studentNameLogin" name="studentNameLogin" placeholder="XYZ" />
                <label for="studentNameLogin">Name</label>
            </div>
        </div>

        <div class="card-body">
            <div class="form-floating">
                <input type="password" class="form-control" id="studentPasswordLogin" name="studentPasswordLogin" placeholder="Password" />
                <label for="studentPasswordLogin">Password</label>
            </div>
        </div>

        <div class="card-body d-grid">
            <button type="submit" class="btn btn-outline-dark btn-lg" id="studentLoginButton" name="student_login_button">
                Login
            </button>
        </div>

        <div class="card-body row row-cols-auto">
            <h4 class="col">Are you a teacher?</h4>
            <button class="btn btn-outline-primary btn-lg col" id="showTeacherLogin">Click here</button>
        </div>
    </div>
</form>

<script>
    // Validating student login input
    function validateStudentLoginInput() {
        const studentNameLogin = document.getElementById("studentNameLogin");
        if (studentNameLogin.value === "") {
            alert("Name is Required");
            studentNameLogin.focus();
            return false;
        }

        const studentPasswordLogin = document.getElementById("studentPasswordLogin");
        if (studentPasswordLogin.value === "") {
            alert("Password is Required");
            studentPasswordLogin.focus();
            return false;
        }

        return true;
    }

    document
        .getElementById("showTeacherLogin")
        .addEventListener("click", (event) => {
            event.preventDefault();
            location.href = "teacher_login.php";
        });
</script>