<?php 
    $registration_id = '';
    $aadhar_number = '';
    $samagraha_id = '';
    $occupation = '';
    $annual_income = '';
    $remarks = '';
    $hsc_school_name = '';
    $hsc_board = '';
    $hsc_marks = '';
    $hsc_yop = '';

    session_start();
    //Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'agrawal_data');

    //if registerCDIPS is clicked
    if(isset($_POST['registerCDIPS']) || isset($_POST['registerCDIP']) || isset($_POST['registerCDGI'])){

        //Personal Info Setting
        $full_name = mysqli_real_escape_string($db,$_POST['full_name']);
        // $middle_name = mysqli_real_escape_string($db,$_POST['middle_name']);
        // $last_name = mysqli_real_escape_string($db,$_POST['last_name']);
        // $mother_maiden_name = mysqli_real_escape_string($db,$_POST['mother_maiden_name']);
        $date_of_birth = mysqli_real_escape_string($db,$_POST['date_of_birth']);
        $gender = mysqli_real_escape_string($db,$_POST['gender']);
        $student_email = mysqli_real_escape_string($db,$_POST['student_email']);
        $student_mobile_number = mysqli_real_escape_string($db,$_POST['student_mobile_number']);
        $category = mysqli_real_escape_string($db,$_POST['category']);
        $physically_challenged = mysqli_real_escape_string($db,$_POST['physically_challenged']);
        $aadhar_number = mysqli_real_escape_string($db,$_POST['aadhar_number']);
        $samagraha_id = mysqli_real_escape_string($db,$_POST['samagraha_id']);

        //Family Info Setting
        $father_name = mysqli_real_escape_string($db,$_POST['father_name']);
        $father_mobile_number = mysqli_real_escape_string($db,$_POST['father_mobile_number']);
        $occupation = mysqli_real_escape_string($db,$_POST['occupation']);
        $annual_income = mysqli_real_escape_string($db,$_POST['annual_income']);
        $mother_name = mysqli_real_escape_string($db,$_POST['mother_name']);
        $mother_mobile_number = mysqli_real_escape_string($db,$_POST['mother_mobile_number']);

        //Through Info Setting
        $through_agent = mysqli_real_escape_string($db,$_POST['through_agent']);
        if($through_agent == 'Yes')
        {    
            $agent_name = mysqli_real_escape_string($db,$_POST['agent_name']);
            $agent_mobile_number = mysqli_real_escape_string($db,$_POST['agent_mobile_number']);
            $through_whom = '';
            $other_person_name = '';
            $other_person_relation = '';
            $other_person_same_college = '';
        }
        else
        {    
            $agent_name = '';
            $agent_mobile_number = '';
            $through_whom = mysqli_real_escape_string($db,$_POST['through_whom']);
            if($through_whom == 'Self')
            {    
                $other_person_name = '';
                $other_person_relation = '';
                $other_person_same_college = '';
            }
            else
            {
                $other_person_name = mysqli_real_escape_string($db,$_POST['other_person_name']);
                $other_person_relation = mysqli_real_escape_string($db,$_POST['other_person_relation']);
                $other_person_same_college = mysqli_real_escape_string($db,$_POST['other_person_same_college']);
            }
        }

        //SSC & HSC Info Setting
        $ssc_school_name = mysqli_real_escape_string($db,$_POST['ssc_school_name']);
        $ssc_board = mysqli_real_escape_string($db,$_POST['ssc_board']);
        $ssc_marks = mysqli_real_escape_string($db,$_POST['ssc_marks']);
        $ssc_yop = mysqli_real_escape_string($db,$_POST['ssc_yop']);
        $hsc_school_name = mysqli_real_escape_string($db,$_POST['hsc_school_name']);
        $hsc_board = mysqli_real_escape_string($db,$_POST['hsc_board']);
        $hsc_marks = mysqli_real_escape_string($db,$_POST['hsc_marks']);
        $hsc_yop = mysqli_real_escape_string($db,$_POST['hsc_yop']);

        $institute_info_src = mysqli_real_escape_string($db,$_POST['institute_info_src']);
        $current_course = mysqli_real_escape_string($db,$_POST['current_course']);
        $remarks = mysqli_real_escape_string($db,$_POST['remarks']);
        // $password = mysqli_real_escape_string($db,$_POST['password']);
        // $password = 'abc123';
        if(isset($_POST['registerCDIPS']))
        {
            $cdipsCountQuery= "SELECT COUNT(*) AS numRows FROM cdips_students";
            $cdipsCount=mysqli_query($db,$cdipsCountQuery);
            //echo "Register CDIPS";
            // echo "<pre>"; 
            // print_r($cdipsCount);
            // echo "</pre>";
            while($row = mysqli_fetch_object($cdipsCount)){
                // echo "<pre>"; 
                // print_r($row);
                // echo "</pre>";
                $cdipsNumRows = $row->numRows;
                //echo $cdipsNumRows;
            }
            $cdipsNumRows = $cdipsNumRows + 1;
            //echo $cdipsNumRows;
            $registration_id = 'CDIPS'.$cdipsNumRows;
            $cdipsInsertQuery = "INSERT INTO cdips_students(registration_id,full_name,date_of_birth,gender,
                student_email,student_mobile_number,category,physically_challenged,ssc_school_name,ssc_board,
                ssc_marks,ssc_yop,hsc_school_name,hsc_board,hsc_marks,hsc_yop,aadhar_number,samagraha_id,
                father_name,father_mobile_number,occupation,annual_income,mother_name,mother_mobile_number,
                through_agent,agent_name,agent_mobile_number,through_whom,other_person_name,other_person_relation,
                other_person_same_college,institute_info_src,current_course,remarks)
                VALUES ('$registration_id','$full_name','$date_of_birth','$gender','$student_email',
                '$student_mobile_number','$category','$physically_challenged','$ssc_school_name',
                '$ssc_board','$ssc_marks','$ssc_yop','$hsc_school_name','$hsc_board','$hsc_marks','$hsc_yop',
                '$aadhar_number','$samagraha_id','$father_name','$father_mobile_number','$occupation',
                '$annual_income','$mother_name','$mother_mobile_number','$through_agent','$agent_name',
                '$agent_mobile_number','$through_whom','$other_person_name','$other_person_relation',
                '$other_person_same_college','$institute_info_src','$current_course','$remarks')";
            
            $cdipsInsert=mysqli_query($db,$cdipsInsertQuery);
            //echo "Register CDIPS";
            echo "<pre>"; 
            print_r($cdipsInsert);
            echo "</pre>";
            echo 'ABC'.mysqli_affected_rows($db);
            if(mysqli_affected_rows($db) == 1)
            {
                echo "Success";
                $_SESSION['field']="CDIPS";
                $_SESSION['registration_id']=$registration_id;
                $_SESSION['success'] = 'Registration successful.';
            }
            else
            {
                $_SESSION['field']="CDIPS";
                $_SESSION['registration_id'] = '';
                $_SESSION['error'] = 'Registration unsuccessful. Please try again';
            }
        }
        else if(isset($_POST['registerCDIP']))
        {
            $cdipCountQuery= "SELECT COUNT(*) AS numRows FROM cdip_students";
            $cdipCount=mysqli_query($db,$cdipCountQuery);
            //echo "Register CDIPS";
            // echo "<pre>"; 
            // print_r($cdipsCount);
            // echo "</pre>";
            while($row = mysqli_fetch_object($cdipCount)){
                echo "<pre>"; 
                print_r($row);
                echo "</pre>";
                $cdipNumRows = $row->numRows;
                //echo $cdipsNumRows;
            }
            $cdipNumRows = $cdipNumRows + 1;
            //echo $cdipsNumRows;
            $registration_id = 'CDIP'.$cdipNumRows;
            $cdipInsertQuery = "INSERT INTO cdip_students(registration_id,full_name,date_of_birth,gender,
                student_email,student_mobile_number,category,physically_challenged,ssc_school_name,ssc_board,
                ssc_marks,ssc_yop,hsc_school_name,hsc_board,hsc_marks,hsc_yop,aadhar_number,samagraha_id,
                father_name,father_mobile_number,occupation,annual_income,mother_name,mother_mobile_number,
                through_agent,agent_name,agent_mobile_number,through_whom,other_person_name,other_person_relation,
                other_person_same_college,institute_info_src,current_course,remarks)
                VALUES ('$registration_id','$full_name','$date_of_birth','$gender','$student_email',
                '$student_mobile_number','$category','$physically_challenged','$ssc_school_name',
                '$ssc_board','$ssc_marks','$ssc_yop','$hsc_school_name','$hsc_board','$hsc_marks','$hsc_yop',
                '$aadhar_number','$samagraha_id','$father_name','$father_mobile_number','$occupation',
                '$annual_income','$mother_name','$mother_mobile_number','$through_agent','$agent_name',
                '$agent_mobile_number','$through_whom','$other_person_name','$other_person_relation',
                '$other_person_same_college','$institute_info_src','$current_course','$remarks')";
            
            $cdipInsert=mysqli_query($db,$cdipInsertQuery);
            echo "Register CDIP : ";
            echo "<pre>"; 
            print_r($cdipInsert);
            echo "</pre>";
            echo 'ABC'.mysqli_affected_rows($db);
            if(mysqli_affected_rows($db) == 1)
            {
                echo "Success";
                $_SESSION['field']='CDIP';
                $_SESSION['registration_id']=$registration_id;
                $_SESSION['success'] = 'Registration successful.';
            }
            else
            {
                $_SESSION['field']='CDIP';
                $_SESSION['registration_id'] = '';
                $_SESSION['error'] = 'Registration unsuccessful. Please try again';
            }
            // header('location: CDIPSRegistrationForm.php');
        }
        else if(isset($_POST['registerCDGI']))
        {
            $diploma_done = mysqli_real_escape_string($db,$_POST['diploma_done']);   
            $diploma_school_name = mysqli_real_escape_string($db,$_POST['diploma_school_name']);
            $diploma_board = mysqli_real_escape_string($db,$_POST['diploma_board']);
            $diploma_marks = mysqli_real_escape_string($db,$_POST['diploma_marks']);
            $diploma_branch = mysqli_real_escape_string($db,$_POST['diploma_branch']);

            $iit_jee_appeared = mysqli_real_escape_string($db,$_POST['iit_jee_appeared']);
            $iit_jee_marks = mysqli_real_escape_string($db,$_POST['iit_jee_marks']);

            $current_course_2 = mysqli_real_escape_string($db,$_POST['current_course_2']);
            $current_course_3 = mysqli_real_escape_string($db,$_POST['current_course_3']);

            $cdgiCountQuery= "SELECT COUNT(*) AS numRows FROM cdgi_students";
            $cdgiCount=mysqli_query($db,$cdgiCountQuery);
            //echo "Register CDIPS";
            // echo "<pre>"; 
            // print_r($cdipsCount);
            // echo "</pre>";
            while($row = mysqli_fetch_object($cdgiCount)){
                echo "<pre>"; 
                print_r($row);
                echo "</pre>";
                $cdgiNumRows = $row->numRows;
                //echo $cdipsNumRows;
            }
            $cdgiNumRows = $cdgiNumRows + 1;
            //echo $cdipsNumRows;
            $registration_id = 'CDGI'.$cdgiNumRows;
            $cdgiInsertQuery = "INSERT INTO cdgi_students(registration_id,full_name,date_of_birth,gender,
                student_email,student_mobile_number,category,physically_challenged,ssc_school_name,ssc_board,
                ssc_marks,ssc_yop,hsc_school_name,hsc_board,hsc_marks,hsc_yop,diploma_done,diploma_school_name,
                diploma_board,diploma_marks,diploma_branch,iit_jee_appeared,iit_jee_marks,aadhar_number,samagraha_id,
                father_name,father_mobile_number,occupation,annual_income,mother_name,mother_mobile_number,
                through_agent,agent_name,agent_mobile_number,through_whom,other_person_name,other_person_relation,
                other_person_same_college,institute_info_src,current_course,current_course_2,current_course_3,remarks)
                VALUES ('$registration_id','$full_name','$date_of_birth','$gender','$student_email',
                '$student_mobile_number','$category','$physically_challenged','$ssc_school_name',
                '$ssc_board','$ssc_marks','$ssc_yop','$hsc_school_name','$hsc_board','$hsc_marks','$hsc_yop',
                '$diploma_done','$diploma_school_name','$diploma_board','$diploma_marks','$diploma_branch',
                '$iit_jee_appeared','$iit_jee_marks','$aadhar_number','$samagraha_id','$father_name',
                '$father_mobile_number','$occupation','$annual_income','$mother_name','$mother_mobile_number',
                '$through_agent','$agent_name','$agent_mobile_number','$through_whom','$other_person_name',
                '$other_person_relation','$other_person_same_college','$institute_info_src','$current_course',
                '$current_course_2','$current_course_3','$remarks')";
            
            $cdgiInsert=mysqli_query($db,$cdgiInsertQuery);
            echo "Register CDGI : ";
            echo "<pre>"; 
            print_r($cdgiInsert);
            echo "</pre>";
            echo 'ABC'.mysqli_affected_rows($db);
            if(mysqli_affected_rows($db) == 1)
            {
                echo "Success";
                $_SESSION['field']='CDGI';
                $_SESSION['registration_id']=$registration_id;
                $_SESSION['success'] = 'Registration successful.';
            }
            else
            {
                $_SESSION['field']='CDGI';
                $_SESSION['registration_id'] = '';
                $_SESSION['error'] = 'Registration unsuccessful. Please try again';
            }
        }
        else
        {
            echo "No Form Submitted";
        }
        
        // $registration_id = mysqli_real_escape_string($db,$_POST['registration_id']);
        echo "registration_id: ",$registration_id;
        header('location: studentHome.php');
    }
?>