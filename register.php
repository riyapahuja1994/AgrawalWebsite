<?php 
    $registration_id='';
    //Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'agrawal_data');

    //if registerCDIPS is clicked
    if(isset($_POST['registerCDIPS']) || isset($_POST['registerCDIP']) || isset($_POST['registerCDGI'])){
        if(isset($_POST['registerCDIPS']))
        {
            $cdipsCountQuery= "SELECT COUNT(*) AS numRows FROM cdips_students";
            $cdipsCount=mysqli_query($db,$cdipsCountQuery);
            //echo "Register CDIPS";
            // echo "<pre>"; 
            // print_r($cdipsCount);
            // echo "</pre>";
            while($row = mysqli_fetch_object($cdipsCount)){
                echo "<pre>"; 
                print_r($row);
                echo "</pre>";
                $cdipsNumRows = $row->numRows;
                //echo $cdipsNumRows;
            }
            $cdipsNumRows = $cdipsNumRows + 1;
            //echo $cdipsNumRows;
            $registration_id = 'CDIPS'.$cdipsNumRows;
            header('location: CDIPSRegistrationForm.php?registration_id='.$registration_id);
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
            header('location: CDIPRegistrationForm.php?registration_id='.$registration_id);
        }
        else if(isset($_POST['registerCDGI']))
        {
            $cdgiCountQuery= "SELECT COUNT(*) AS numRows FROM cdgi_students";
            $cdgiCount=mysqli_query($db,$cdgiCountQuery);
            //echo "Register CDGI";
            // echo "<pre>"; 
            // print_r($cdgiCount);
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
            header('location: CDGIRegistrationForm.php?registration_id='.$registration_id);
        }
        else{
            echo "Error Occured";
            header('location: home.php');
        }
    }