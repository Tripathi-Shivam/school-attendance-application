<?php
include("main_nav.php");
include("login.php");

// session_start();

if (isset($_SESSION["teacher_id"])) {
    header("location:teacher_home.php");
}
?>
<form method="post" onsubmit="return validateTeacherLoginInput()">

    <div class="container">

        <!-- Teacher login -->
        <div class="card shadow mt-4" id="teacherLoginDiv">
            <h1 class="text-center m-3">Teacher Login</h1>

            <div class="card-body">
                <div class="form-floating ">
                    <input type="text" class="form-control" id="teacherNameLogin" name="teacherNameLogin" placeholder="XYZ" />
                    <label for="teacherNameLogin">Name</label>
                </div>
            </div>

            <div class="card-body">
                <div class="form-floating">
                    <input type="password" class="form-control" id="teacherPasswordLogin" name="teacherPasswordLogin" placeholder="Password" />
                    <label for="teacherPasswordLogin">Password</label>
                </div>
            </div>

            <div class="card-body d-grid">
                <button type="submit" class="btn btn-outline-dark btn-lg" id="teacherLoginButton" name="teacher_login_button">
                    Login
                </button>
            </div>

            <div class="card-body row row-cols-auto">
                <h4 class="col">Are you a student?</h4>
                <button class="btn btn-outline-primary btn-lg col" id="showStudentLogin">Click here</button>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    // Validating teacher login input
    function validateTeacherLoginInput() {
        const teacherNameLogin = document.getElementById("teacherNameLogin");
        if (teacherNameLogin.value === "") {
            alert("Name is Required");
            teacherNameLogin.focus();
            return false;
        }

        const teacherPasswordLogin = document.getElementById("teacherPasswordLogin");
        if (teacherPasswordLogin.value === "") {
            alert("Password is Required");
            teacherPasswordLogin.focus();
            return false;
        }

        return true;
    }

    document
        .getElementById("showStudentLogin")
        .addEventListener("click", (event) => {
            event.preventDefault();
            location.href = "student_login.php";
        });
</script>