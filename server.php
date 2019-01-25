<?php 
$registration_id='';$gender='';$category='';
    //Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'agrawal_data');

    //if registerCDIPS is clicked
    if(isset($_POST['registerCDIPS'])){
        $registration_id = mysqli_real_escape_string($db,$_POST['registration_id']);
        // $first_name = mysql_real_escape_string($_POST['first_name']);
        // $middle_name = mysql_real_escape_string($_POST['middle_name']);
        // $last_name = mysql_real_escape_string($_POST['last_name']);
        // $mother_maiden_name = mysql_real_escape_string($_POST['mother_maiden_name']);
        // $date_of_birth = mysql_real_escape_string($_POST['date_of_birth']);
        $gender = mysqli_real_escape_string($db,$_POST['gender']);
        // $student_email = mysql_real_escape_string($_POST['student_email']);
        // $student_mobile_number = mysql_real_escape_string($_POST['student_mobile_number']);
        // $student_alternate_number = mysql_real_escape_string($_POST['student_alternate_number']);
        $category = mysqli_real_escape_string($db,$_POST['category']);
        // $physically_challenged = mysql_real_escape_string($_POST['physically_challenged']);
        // $aadhar_number = mysql_real_escape_string($_POST['aadhar_number']);
        // $samagraha_id = mysql_real_escape_string($_POST['samagraha_id']);
        echo "Radio Values: ",$gender,$category;
    }
?>