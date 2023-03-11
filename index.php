<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    if(isset($_GET['page']) && $_GET['page'] == 'register' ){
        include('authentication/register.php');
    }
    else{
        include 'authentication/login.php';
    }
}
else{
    include('head.php');
    

    if(isset($_GET['page']) && $_GET['page'] == 'home' ){
        include('sidebar.php');
        include('home.php');
    }
    elseif(isset($_GET['page']) && $_GET['page'] == 'student-dashboard' ){
        include('sidebar.php');
        include('students/student-dashboard.php');
    }
    elseif(isset($_GET['page']) && $_GET['page'] == 'students' ){
        include('sidebar.php');
        include('students/students.php');
    }
    elseif(isset($_GET['page']) && $_GET['page'] == 'student-details' ){
        include('sidebar.php');
        include('students/student-details.php');
    }
    elseif(isset($_GET['page']) && $_GET['page'] == 'add-student' ){
        include('sidebar.php');
        include('students/add-student.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'edit-student' ){
        include('sidebar.php');
        include('students/edit-student.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'teacher-dashboard' ){
        include('sidebar.php');
        include('teacher/teacher-dashboard.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'teachers' ){
        include('sidebar.php');
        include('teacher/teachers.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'teacher-details' ){
        include('sidebar.php');
        include('teacher/teacher-details.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'add-teacher' ){
        include('sidebar.php');
        include('teacher/add-teacher.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'edit-teacher' ){
        include('sidebar.php');
        include('teacher/edit-teacher.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'expenses' ){
        include('sidebar.php');
        include('expenses/expenses.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'add-expenses' ){
        include('sidebar.php');
        include('expenses/add-expenses.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'fees-collections' ){
        include('sidebar.php');
        include('fee-collections/fees-collections.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'add-fees-collection' ){
        include('sidebar.php');
        include('fee-collections/add-fees-collection.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'salary' ){
        include('sidebar.php');
        include('salary/salary.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'add-salary' ){
        include('sidebar.php');
        include('salary/add-salary.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'profile' ){
        include('sidebar.php');
        include('profile.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'class' ){
        include('sidebar.php');
        include('classes/class.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'add-class' ){
        include('sidebar.php');
        include('classes/add-class.php');
    }elseif(isset($_GET['page']) && $_GET['page'] == 'edit-class' ){
        include('sidebar.php');
        include('classes/edit-class.php');
    }
    // elseif(isset($_GET['page']) && $_GET['page'] == 'login' ){
    //     include('authentication/login.php');
    // }
    elseif(isset($_GET['page']) && $_GET['page'] == 'logout' ){
        include('authentication/logout.php');
    }
    else{
        include('authentication/error-404.php');
    }
}
?>



<?php include('script.php'); ?>
