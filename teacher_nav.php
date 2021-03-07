<?php
include("database_connection.php");
session_start();

if (!isset($_SESSION["teacher_id"])) {
    header("location:teacher_login.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap javascript plugins -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Custom Styling -->
    <style>
        @media(min-width: 2000px) {
            .register-div .login-div {
                max-width: 500px;
            }
        }
    </style>

</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="#">
                <h2>School Attendance</h2>
            </a>

            <!-- This button with show up when the screen size is small -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <div class="ms-auto me-2">

                    <button class="btn btn-primary btn-lg" id="attendance">Attendance</button>

                    <button class="btn btn-success btn-lg" id="logout">Logout</button>

                </div>
            </div>
        </div>
    </nav>

    <script type="text/javascript">
        document.getElementById("attendance").addEventListener("click", (event) => {
            event.preventDefault();
            location.href = "teacher_home.php";
        });

        document.getElementById("logout").addEventListener("click", (event) => {
            event.preventDefault();
            location.href = "logout.php";
        });
    </script>
</body>

</html>