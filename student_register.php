<?php
include("main_nav.php");
include("register.php");

session_start();

if (isset($_SESSION["student_id"])) {
    header("location:student_home.php");
}
?>

<form method="post" onsubmit="return validateStudentRegistrationInput()">

    <!-- Student Form -->
    <div class="container card shadow mt-4" id="studentRegistrationDiv">
        <h1 class="text-center m-3">Student Registration</h1>

        <div class="card-body">
            <div class="form-floating ">
                <input type="text" class="form-control" id="studentName" name="studentName" placeholder="XYZ" />
                <label for="studentName">Name</label>
            </div>
        </div>

        <div class="card-body">
            <div class="form-floating">
                <input type="email" class="form-control" id="studentEmail" name="studentEmail" placeholder="xyz@gmail.com" />
                <label for="studentEmail">Email address</label>
            </div>
        </div>

        <div class="card-body">
            <div class="form-floating">
                <input type="password" class="form-control" id="studentPassword" name="studentPassword" placeholder="Password" />
                <label for="studentPassword">Password</label>
            </div>
        </div>

        <div class="card-body d-grid">
            <button type="submit" class="btn btn-outline-dark btn-lg" id="studentRegisterButton" name="student_register_button">
                Register
            </button>
        </div>

        <div class="card-body row row-cols-auto">
            <h4 class="col">Are you a teacher?</h4>
            <button class="btn btn-outline-primary btn-lg col" id="showTeacher">Click here</button>
        </div>

    </div>
</form>

<script type="text/javascript">
    // Validating student registraion form
    function validateStudentRegistrationInput() {
        const studentName = document.getElementById("studentName");
        if (studentName.value === "") {
            alert("Name is Required");
            studentName.focus();
            return false;
        }

        const studentEmail = document.getElementById("studentEmail");
        if (studentEmail.value === "") {
            alert("Email is Required");
            studentEmail.focus();
            return false;
        }

        const studentPassword = document.getElementById("studentPassword");
        if (studentPassword.value === "") {
            alert("Password is Required");
            studentPassword.focus();
            return false;
        }

        return true;
    }

    document
        .getElementById("showTeacher")
        .addEventListener("click", (event) => {
            event.preventDefault();
            location.href = "teacher_register.php";
        });
</script>