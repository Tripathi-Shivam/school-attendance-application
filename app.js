document
    .getElementById("teacherRegisterButton")
    .addEventListener("click", (event) => {
        // console.log(validateTeacherRegistrationInput());
        event.preventDefault();
        registerTeacher();
    });

document
    .getElementById("studentRegisterButton")
    .addEventListener("click", (event) => {
        //registerStudent();
        event.preventDefault();
        registerStudent();
    });

document
    .getElementById("teacherLoginButton")
    .addEventListener("click", (event) => {
        event.preventDefault();
        loginTeacher();
    });

document
    .getElementById("studentLoginButton")
    .addEventListener("click", (event) => {
        event.preventDefault();
        loginStudent();
    });

// Register new teacher
function registerTeacher() {
    var jsonStr = validateTeacherRegistrationInput();
    if (jsonStr === "") {
        return;
    }
    document.getElementById("teacher-register-form").submit();
}

// Login teacher
function loginTeacher() {
    var jsonStr = validateTeacherLoginInput();
    if (jsonStr === "") {
        return;
    }
    document.getElementById("teacher-login-form").submit();
}

// Register new student
function registerStudent() {
    var jsonStr = validateStudentRegistrationInput();
    if (jsonStr === "") {
        return;
    }
    document.getElementById("student-register-form").submit();
}

// Login Student
function loginStudent() {
    var jsonStr = validateStudentLoginInput();
    if (jsonStr === "") {
        return;
    }
    document.getElementById("student-login-form").submit();
}

// Validating student registraion form
function validateStudentRegistrationInput() {
    const studentName = document.getElementById("studentName").value;
    if (studentName === "") {
        alert("Name is Required");
        document.getElementById("studentName").focus();
        return "";
    }

    const studentEmail = document.getElementById("studentEmail").value;
    if (studentEmail === "") {
        alert("Email is Required");
        document.getElementById("studentEmail").focus();
        return "";
    }

    const studentPassword = document.getElementById("studentPassword").value;
    if (studentPassword === "") {
        alert("Password is Required");
        document.getElementById("studentPassword").focus();
        return "";
    }

    var jsonStrObj = {
        name: studentName,
        email: studentEmail,
        password: studentPassword,
    };

    return JSON.stringify(jsonStrObj);
}

// Validating teacher registraion form
function validateTeacherRegistrationInput() {
    const teacherName = document.getElementById("teacherName").value;
    if (teacherName === "") {
        alert("Name is Required");
        document.getElementById("teacherName").focus();
        return "";
    }

    const teacherEmail = document.getElementById("teacherEmail").value;
    if (teacherEmail === "") {
        alert("Email is Required");
        document.getElementById("teacherEmail").focus();
        return "";
    }

    const teacherPassword = document.getElementById("teacherPassword").value;
    if (teacherPassword === "") {
        alert("Password is Required");
        document.getElementById("teacherPassword").focus();
        return "";
    }

    var jsonStrObj = {
        name: teacherName,
        email: teacherEmail,
        password: teacherPassword,
    };

    return JSON.stringify(jsonStrObj);
}

// Validating teacher login input
function validateTeacherLoginInput() {
    const teacherNameLogin = document.getElementById("teacherNameLogin").value;
    if (teacherNameLogin === "") {
        alert("Name is Required");
        document.getElementById("teacherNameLogin").focus();
        return "";
    }

    const teacherPasswordLogin = document.getElementById("teacherPasswordLogin")
        .value;
    if (teacherPasswordLogin === "") {
        alert("Password is Required");
        document.getElementById("teacherPasswordLogin").focus();
        return "";
    }

    var jsonStrObj = {
        name: teacherNameLogin,
        password: teacherPasswordLogin,
    };

    return JSON.stringify(jsonStrObj);
}

// Validating student login input
function validateStudentLoginInput() {
    const studentNameLogin = document.getElementById("studentNameLogin").value;
    if (studentNameLogin === "") {
        alert("Name is Required");
        document.getElementById("studentNameLogin").focus();
        return "";
    }

    const studentPasswordLogin = document.getElementById("studentPasswordLogin")
        .value;
    if (studentPasswordLogin === "") {
        alert("Password is Required");
        document.getElementById("studentPasswordLogin").focus();
        return "";
    }

    var jsonStrObj = {
        name: studentNameLogin,
        password: studentPasswordLogin,
    };

    return JSON.stringify(jsonStrObj);
}
