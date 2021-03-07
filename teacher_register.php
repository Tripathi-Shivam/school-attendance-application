<?php
include("main_nav.php");
include("register.php");

session_start();

if (isset($_SESSION["teacher_id"])) {
    header("location:teacher_home.php");
}
?>
<form method="post" onsubmit="return validateTeacherRegistrationInput()">
    <div class="container card shadow mt-4" id="teacherRegistrationDiv">
        <h1 class="text-center m-3">Teacher Registration</h1>

        <div class="card-body">
            <div class="form-floating ">
                <input type="text" class="form-control" id="teacherName" name="teacherName" placeholder="XYZ" />
                <label for="teacherName">Name</label>
            </div>
        </div>

        <div class="card-body">
            <div class="form-floating">
                <input type="email" class="form-control" id="teacherEmail" name="teacherEmail" placeholder="xyz@gmail.com" />
                <label for="teacherEmail">Email address</label>
            </div>
        </div>

        <div class="card-body">
            <div class="form-floating">
                <input type="password" class="form-control" id="teacherPassword" name="teacherPassword" placeholder="Password" />
                <label for="teacherPassword">Password</label>
            </div>
        </div>

        <div class="card-body d-grid">
            <button type="submit" class="btn btn-outline-dark btn-lg" id="teacherRegisterButton" name="teacher_register_button">
                Register
            </button>
        </div>

        <div class="card-body row row-cols-auto">
            <h4 class="col">Are you a student?</h4>
            <button class="btn btn-outline-primary col" id="showStudent">Click here</button>
        </div>

    </div>
</form>

<script type="text/javascript">
    // Validating teacher registraion form
    function validateTeacherRegistrationInput() {
        const teacherName = document.getElementById("teacherName");
        if (teacherName.value === "") {
            alert("Name is Required");
            teacherName.focus();
            return false;
        }

        const teacherEmail = document.getElementById("teacherEmail");
        if (teacherEmail.value === "") {
            alert("Email is Required");
            teacherEmail.focus();
            return "";
        }

        const teacherPassword = document.getElementById("teacherPassword");
        if (teacherPassword.value === "") {
            alert("Password is Required");
            teacherPassword.focus();
            return false;
        }

        return true;
    }

    document
        .getElementById("showStudent")
        .addEventListener("click", (event) => {
            event.preventDefault();
            location.href = "student_register.php";
        });
</script>