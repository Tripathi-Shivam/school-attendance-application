const loginButton = document.querySelector(".btn-primary");
const registerButton = document.querySelector(".btn-success");

const loginDiv = document.querySelector(".login-div");
const registerDiv = document.querySelector(".register-div");

const teacherRegistrationDiv = document.getElementById(
    "teacherRegistrationDiv"
);
const studentRegistrationDiv = document.getElementById(
    "studentRegistrationDiv"
);

const teacherLoginDiv = document.getElementById("teacherLoginDiv");
const studentLoginDiv = document.getElementById("studentLoginDiv");

// Shows the div of login
loginButton.addEventListener("click", () => {
    registerDiv.classList.add("d-none");
    loginDiv.classList.remove("d-none");
    //console.log(registerDiv);
});

// Shows the div of register
registerButton.addEventListener("click", () => {
    loginDiv.classList.add("d-none");
    registerDiv.classList.remove("d-none");
});

document.getElementById("showStudent").addEventListener("click", (event) => {
    event.preventDefault();
    teacherRegistrationDiv.classList.add("d-none");
    studentRegistrationDiv.classList.remove("d-none");
});

document.getElementById("showTeacher").addEventListener("click", (event) => {
    event.preventDefault();
    studentRegistrationDiv.classList.add("d-none");
    teacherRegistrationDiv.classList.remove("d-none");
});

document
    .getElementById("showStudentLogin")
    .addEventListener("click", (event) => {
        event.preventDefault();
        teacherLoginDiv.classList.add("d-none");
        studentLoginDiv.classList.remove("d-none");
    });

document
    .getElementById("showTeacherLogin")
    .addEventListener("click", (event) => {
        event.preventDefault();
        studentLoginDiv.classList.add("d-none");
        teacherLoginDiv.classList.remove("d-none");
    });
