<?php 
    session_start();
    $admin_id = "admin";
    $admin_password = "admin";
    //Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'agrawal_data');

    //if login is clicked
    if(isset($_POST['loginAdmin']) || isset($_POST['loginStudent'])){
        
        if(isset($_POST['loginAdmin']))
        {
            $adminId = mysqli_real_escape_string($db,$_POST['admin_id']);
            $adminPassword = mysqli_real_escape_string($db,$_POST['admin_password']);
            if($adminId == $admin_id && $adminPassword == $admin_password)
            {
                $_SESSION['admin_id'] = $admin_id;
                $_SESSION['success'] = "You are logged in as Admin.";
                header('location: adminHome.php');
            }
            else{
                echo "Incorrect Admin id or Password";
                header('location: adminLogin.php');
            }
        }
        else{
                $studentId = trim(mysqli_real_escape_string($db,$_POST['student_id']));
                $studentPassword = mysqli_real_escape_string($db,$_POST['student_password']);
                
                echo "ABC: ";
                if (strpos($studentId, 'CDGI') === 0) {
                    echo 'CDGI true';
                    $loginQuery = "SELECT * FROM cdgi_students WHERE registration_id='$studentId' AND login_password='$studentPassword'";
                }
                else if ((strpos($studentId, 'CDIP') === 0) && !(strpos($studentId, 'CDIPS') === 0)){
                    echo 'CDIP true';
                    $loginQuery = "SELECT * FROM cdip_students WHERE registration_id='$studentId' AND login_password='$studentPassword'";
                }
                else if (strpos($studentId, 'CDIPS') === 0) {
                    echo 'CDIPS true';
                    $loginQuery = "SELECT * FROM cdips_students WHERE registration_id='$studentId' AND login_password='$studentPassword'";
                }
                else{
                    echo "Incorrect Student id or Password";
                    header('location: studentLogin.php');
                }
                $loginQueryresult = mysqli_query($db,$loginQuery);
                echo "<pre>"; 
                print_r($loginQueryresult);
                echo "</pre>";
                if(mysqli_num_rows($loginQueryresult) == 1){
                    //Log User in
                    $_SESSION['student_id'] = $studentId;
                    $_SESSION['success'] = "You are logged in as Student.";
                    header('location: studentHome.php');
                }
                else{
                    echo "Incorrect Student id or Password";
                    header('location: studentLogin.php');
                }
        }
        
    }
    

    //logout
    if(isset($_GET['admin_logout']) || isset($_GET['student_logout'])){
        session_destroy();
        unset($_SESSION['success']);
        if(isset($_GET['admin_logout'])){
            unset($_SESSION['admin_id']);
        }
        else
        {
            unset($_SESSION['student_id']);
        }
        header('location: home.php');
    }

?>