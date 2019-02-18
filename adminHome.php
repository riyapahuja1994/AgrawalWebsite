<?php include('index.php');?>
<?php include('login.php');?>
<body>
<script type='text/javascript'>
    var xport = {
        _fallbacktoCSV: true,  
        toCSV: function(tableId, filename) {
            this._filename = (typeof filename === 'undefined') ? tableId : filename;
            // Generate our CSV string from out HTML Table
            var csv = this._tableToCSV(document.getElementById(tableId));
            // Create a CSV Blob
            var blob = new Blob([csv], { type: "text/csv" });

            // Determine which approach to take for the download
            if (navigator.msSaveOrOpenBlob) {
            // Works for Internet Explorer and Microsoft Edge
            navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
            } else {      
            this._downloadAnchor(URL.createObjectURL(blob), 'csv');      
            }
        },
        _getMsieVersion: function() {
            var ua = window.navigator.userAgent;

            var msie = ua.indexOf("MSIE ");
            if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
            }

            var trident = ua.indexOf("Trident/");
            if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf("rv:");
            return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
            }

            var edge = ua.indexOf("Edge/");
            if (edge > 0) {
            // Edge (IE 12+) => return version number
            return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
            }

            // other browser
            return false;
        },
        _isFirefox: function(){
            if (navigator.userAgent.indexOf("Firefox") > 0) {
            return 1;
            }
            
            return 0;
        },
        _downloadAnchor: function(content, ext) {
            var anchor = document.createElement("a");
            anchor.style = "display:none !important";
            anchor.id = "downloadanchor";
            document.body.appendChild(anchor);

            // If the [download] attribute is supported, try to use it
            
            if ("download" in anchor) {
                anchor.download = this._filename + "." + ext;
            }
            anchor.href = content;
            anchor.click();
            anchor.remove();
        },
        _tableToCSV: function(table) {
            // We'll be co-opting `slice` to create arrays
            var slice = Array.prototype.slice;

            return slice
            .call(table.rows)
            .map(function(row) {
                return slice
                .call(row.cells)
                .map(function(cell) {
                    return '"t"'.replace("t", cell.textContent);
                })
                .join(",");
            })
            .join("\r\n");
  }
};
</script>
    <div>
        <nav class="navbar navbar-primary pl-5 pr-5 header-bg-color mb-3">
            <!-- <a class="navbar-brand" href="#"> -->
                <img src="img/ag-logo.jpg" width="100" height="100" class="d-inline-block align-top" alt="CDGI">
            <!-- </a> -->
            <div class="d-inline-block text-center">
                <h2>CHAMELI DEVI GROUP OF INSTITUTIONS</h2>
                <h4>KHANDWA ROAD, INDORE, MADHYA PRADESH</h4>
            </div>
            <img src="img/cdgi-logo.png" width="100" height="100" class="d-inline-block align-top" alt="Agrawal Group">
        </nav>
        <?php if(isset($_SESSION['loginsuccess'])): ?>
            <div class="container mt-5">
                <div class="alert alert-success mt-5 mb-5 text-center">
                    Login Successful.
                    <?php 
                        echo $_SESSION['loginsuccess'];
                    ?>
                </div>
                <div class="row mt-5 mb-4">
                    <div class="col-sm-4">
                        <div class="card text-center">
                        <h5 class="card-header">CDGI</h5>
                        <img class="card-img-top pl-5 pr-5 pt-2 pb-0" src="img/cdgi-logo.png" alt="Card image cap">
                        <div class="card-body card-body-border-top">
                            <!-- <p class="card-text"></p> -->
                            <form action="adminHome.php" method="post">
                                <button type='submit' class="btn btn-primary" name="viewCdgiData">View Data</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                        <h5 class="card-header">CDIP</h5>
                        <img class="card-img-top pl-5 pr-5 pt-2 pb-0" src="img/cdip-logo.jpg" alt="Card image cap">
                        <div class="card-body card-body-border-top">
                            <!-- <p class="card-text"></p> -->
                            <form action="adminHome.php" method="post">
                                <button type='submit' class="btn btn-primary" name="viewCdipData">View Data</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                        <h5 class="card-header">CDIPS</h5>
                        <img class="card-img-top pl-5 pr-5 pt-2 pb-0" src="img/cdips-logo1.jpg" alt="Card image cap">
                        <div class="card-body card-body-border-top">
                            <!-- <p class="card-text"></p> -->
                            <form action="adminHome.php" method="post">
                                <button type='submit' class="btn btn-primary" name="viewCdipsData">View Data</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <?php 
                        //Connect to database
                        $db = mysqli_connect('localhost', 'root', '', 'agrawal_data');
                        // $getDataQueryresult = '';
                        $outputFile = "noData";
                        //if viewData is clicked
                        if(isset($_POST['viewCdgiData']) || isset($_POST['viewCdipData']) || isset($_POST['viewCdipsData']) || isset($_POST['viewAllData'])){
                            //echo "in if";
                            $outputFile = "agrawalData";
                            if(isset($_POST['viewCdgiData'])){
                                $outputFile = "cdgiData";
                                $getDataQuery = "SELECT * FROM cdgi_students";
                            }
                            else if(isset($_POST['viewCdipData'])){
                                $outputFile = "cdipData";
                                $getDataQuery = "SELECT * FROM cdip_students";
                            }
                            else if(isset($_POST['viewCdipsData'])){
                                $outputFile = "cdipsData";
                                $getDataQuery = "SELECT * FROM cdips_students";
                            }
                            else{
                                $getDataSQuery = "SELECT * FROM cdgi_students,cdip_students,cdips_students";
                                // $getCDIPDataQuery = "SELECT * FROM cdip_students";
                                // $getCDIPSDataQuery = "SELECT * FROM cdips_students";
                            }

                            $getDataQueryresult = mysqli_query($db,$getDataQuery);
                            // // echo "ABC";
                            //     echo "<pre>"; 
                            //     print_r($getDataQueryresult);
                            //     echo "</pre>";
                            // // echo "ABCPR";
                            echo '<table id="dataTable" class="table-responsive table-sm table-bordered text-center align-middle-custom">
                                <thead class="header-bg-color">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Registration Id</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Date of Birth</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Email Id</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Physically Challenged</th>
                                        <th scope="col">SSC School</th>
                                        <th scope="col">SSC Board</th>
                                        <th scope="col">SSC Marks(in %)</th>
                                        <th scope="col">Year of Passing(SSC)</th>
                                        <th scope="col">HSC School</th>
                                        <th scope="col">HSC Board</th>
                                        <th scope="col">HSC Marks(in %)</th>
                                        <th scope="col">Year of Passing(HSC)</th>';
                                        if(isset($_POST['viewCdgiData'])){
                                            echo '<th scope="col">Diploma Done</th>
                                            <th scope="col">Diploma College</th>
                                            <th scope="col">Diploma Board</th>
                                            <th scope="col">Diploma Marks</th>
                                            <th scope="col">Diploma Branch</th>
                                            <th scope="col">IIT JEE Appeared</th>
                                            <th scope="col">IIT JEE Marks</th>';
                                        }
                                        echo '<th scope="col">Aadhar Naumber</th>
                                        <th scope="col">Samagraha Id</th>
                                        <th scope="col">Father\'s Name</th>
                                        <th scope="col">Father\'s Mobile Number</th>
                                        <th scope="col">Occupation</th>
                                        <th scope="col">Annual Income</th>
                                        <th scope="col">Mother\'s Name</th>
                                        <th scope="col">Mother\'s Mobile Number</th>
                                        <th scope="col">Through Agent</th>
                                        <th scope="col">Agent Name</th>
                                        <th scope="col">Agent Mobile Number</th>
                                        <th scope="col">Through whom</th>
                                        <th scope="col">Other Person\'s name</th>
                                        <th scope="col">Other Person\'s Relation</th>
                                        <th scope="col">Is Other Person\'s in CDGI?</th>
                                        <th scope="col">This Institute Information Source</th>';
                                        if(isset($_POST['viewCdgiData'])){
                                            echo '<th scope="col">Branch Preference 1</th>
                                            <th scope="col">Branch Preference 2</th>
                                            <th scope="col">Branch Preference 3</th>';
                                        }
                                        else
                                        {
                                            echo '<th scope="col">Current Course</th>';
                                        }
                                       echo '<th scope="col">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                if(mysqli_num_rows($getDataQueryresult) > 0){
                                    $serialNumberCount = 1;
                                    echo '<div class="row">
                                        <div class="offset-4 col-4 text-center">
                                            <button id="btnExport" class="btn btn-success btn-block mb-3" onclick="javascript:xport.toCSV(\'dataTable\',\''.$outputFile.'\');">Download Data (CSV Format)</button>
                                        </div>
                                    </div>';
                                    while ($row = mysqli_fetch_assoc($getDataQueryresult))
                                    {
                                        echo '<tr>';
                                        echo '<th scope="row">'.$serialNumberCount.'</th>';
                                        echo '<td>'.$row['registration_id'].'</td>';
                                        echo '<td>'.$row['full_name'].'</td>';
                                        echo '<td>'.$row['date_of_birth'].'</td>';
                                        echo '<td>'.$row['gender'].'</td>';
                                        echo '<td>'.$row['student_email'].'</td>';
                                        echo '<td>'.$row['student_mobile_number'].'</td>';
                                        echo '<td>'.$row['category'].'</td>';
                                        echo '<td>'.$row['physically_challenged'].'</td>';
                                        echo '<td>'.$row['ssc_school_name'].'</td>';
                                        echo '<td>'.$row['ssc_board'].'</td>';
                                        echo '<td>'.$row['ssc_marks'].'</td>';
                                        echo '<td>'.$row['ssc_yop'].'</td>';
                                        echo '<td>'.$row['hsc_school_name'].'</td>';
                                        echo '<td>'.$row['hsc_board'].'</td>';
                                        echo '<td>'.$row['hsc_marks'].'</td>';
                                        echo '<td>'.$row['hsc_yop'].'</td>';
                                        if(isset($_POST['viewCdgiData'])){
                                            echo '<td>'.$row['diploma_done'].'</td>';
                                            echo '<td>'.$row['diploma_school_name'].'</td>';
                                            echo '<td>'.$row['diploma_board'].'</td>';
                                            echo '<td>'.$row['diploma_marks'].'</td>';
                                            echo '<td>'.$row['diploma_branch'].'</td>';
                                            echo '<td>'.$row['iit_jee_appeared'].'</td>';
                                            echo '<td>'.$row['iit_jee_marks'].'</td>';
                                        }
                                        echo '<td>'.$row['aadhar_number'].'</td>';
                                        echo '<td>'.$row['samagraha_id'].'</td>';
                                        echo '<td>'.$row['father_name'].'</td>';
                                        echo '<td>'.$row['father_mobile_number'].'</td>';
                                        echo '<td>'.$row['occupation'].'</td>';
                                        echo '<td>'.$row['annual_income'].'</td>';
                                        echo '<td>'.$row['mother_name'].'</td>';
                                        echo '<td>'.$row['mother_mobile_number'].'</td>';
                                        echo '<td>'.$row['through_agent'].'</td>';
                                        echo '<td>'.$row['agent_name'].'</td>';
                                        echo '<td>'.$row['agent_mobile_number'].'</td>';
                                        echo '<td>'.$row['through_whom'].'</td>';
                                        echo '<td>'.$row['other_person_name'].'</td>';
                                        echo '<td>'.$row['other_person_relation'].'</td>';
                                        echo '<td>'.$row['other_person_same_college'].'</td>';
                                        echo '<td>'.$row['institute_info_src'].'</td>';
                                        echo '<td>'.$row['current_course'].'</td>';
                                        if(isset($_POST['viewCdgiData'])){
                                            echo '<td>'.$row['current_course_2'].'</td>';
                                            echo '<td>'.$row['current_course_3'].'</td>';
                                        }
                                        echo '<td>'.$row['remarks'].'</td>';
                                        //echo '<td>Otto</td>';                        
                                        echo '</tr>';
                                        $serialNumberCount++;
                                    }
                                }
                                else{
                                     echo '<tr>';
                                     if(isset($_POST['viewCdgiData'])){
                                        echo '<td colspan="14">No records to be displayed.</td>';
                                        echo '<td colspan="14">No records to be displayed.</td>';
                                        echo '<td colspan="16">No records to be displayed.</td>';
                                     }
                                     else{
                                        echo '<td colspan="11">No records to be displayed.</td>';
                                        echo '<td colspan="11">No records to be displayed.</td>';
                                        echo '<td colspan="13">No records to be displayed.</td>';
                                     }
                                     echo '</tr>';
                                }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    
                        
                                /*?php endif; 
                            <!-- <//?php else: ?>
                                <div class ="page-header">
                                    <h1> No data Found </h1>
                                </div> -->*/
                    ?>
                </div>
            </div>
        <?php endif ?>
        <?php if(isset($_SESSION['admin_id'])): ?>
            <form action="login.php" method="get">
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="submit" name="admin_logout" class="btn btn-danger btn-lg mb-3 ">Logout</button>
                    </div>
                </div>
            </form>
        <?php endif ?>
    </div>
</body>