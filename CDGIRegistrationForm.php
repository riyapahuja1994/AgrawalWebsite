<?php include('register.php');?>
<?php include('server.php');?>
<?php include('index.php');?>
<body>
<script type="text/javascript">
    $( document ).ready(function() {
        $('input[name="through_agent"]').prop({required:true});
    });
    function yopMinMax(){
        var currentYear = (new Date()).getFullYear();
        $('#sscYop').prop({min:2000,max:(currentYear-2)});
        $('#hscYop').prop({min:2000,max:currentYear});
    }
    function isAgentYes(){
        //console.log("ABC"+input[name="through_agent"]);
        var throughAgent = $('input[name="through_agent"]:checked').val();
        if(throughAgent == "No")
        {
            $('#agentName').prop('disabled',true);
            $('#agentPhone').prop('disabled',true);
            $('input[name="through_whom"]').prop({disabled:false, required:true});
            $('#otherPersonName').prop({disabled:false, required:true});
            $('#otherPersonRelation').prop({disabled:false, required:true});
            $('input[name="other_person_same_college"]').prop({disabled:false, required:true});
        }
        else
        {
            $('#agentName').prop({disabled:false, required:true});
            $('#agentPhone').prop({disabled:false, required:true});
            $('input[name="through_whom"]').prop('disabled',true);
            $('#otherPersonName').prop('disabled',true);
            $('#otherPersonRelation').prop('disabled',true);
            $('input[name="other_person_same_college"]').prop('disabled',true);
        }
    }
    function isSelfYes(){
        var throughWhom = $('input[name="through_whom"]:checked').val();
        if(throughWhom == "Self")
        {
            $('#otherPersonName').prop('disabled',true);
            $('#otherPersonRelation').prop('disabled',true);
            $('input[name="other_person_same_college"]').prop('disabled',true);
        }
        else
        {
            $('#otherPersonName').prop({disabled:false, required:true});
            $('#otherPersonRelation').prop({disabled:false, required:true});
            $('input[name="other_person_same_college"]').prop({disabled:false, required:true});
        }
    }
    function isDiplomaDone(){
        var diplomaDone = $('input[name="diploma_done"]:checked').val();
        if(diplomaDone == "Yes")
        {
            $('#diplomaCollege').prop({disabled:false, required:true});
            $('#diplomaMarks').prop({disabled:false, required:true});
            $('#diplomaBranch').prop({disabled:false, required:true});
            $('input[name="diploma_board"]').prop({disabled:false, required:true});
        }
        else
        {
            $('#diplomaCollege').prop('disabled',true);
            $('#diplomaMarks').prop('disabled',true);
            $('#diplomaBranch').prop('disabled',true);
            $('input[name="diploma_board"]').prop('disabled',true);
        }
    }
    function isIITDone(){
        var iitDone = $('input[name="iit_jee_appeared"]:checked').val();
        if(iitDone == "Yes")
        {
            $('#iitJeeMarks').prop({disabled:false,required:true});
        }
        else
        {
            $('#iitJeeMarks').prop({disabled:true,required:false});
        }
    }
</script>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header text-center header-bg-color">CDGI Student Registration</h5>
            <div class="card-body pl-5 pr-5">
                <form method="post" action="server.php">
                    <!-- <div class="pb-2 text-danger">Note: Fields marked with * are mandatory.</div><span class="text-danger">*</span> -->
                    <!-- Personal Information -->
                    <div id="personalInfo">
                        <!-- Student Basic Information -->
                        <div id="studentBasicInfo">
                            <div class="form-group">
                                <label for="studentId">Student Registration Id</label>
                                <input type="text" name="registration_id" class="form-control" id="studentId" 
                                value="<?php if(isset($_GET['registration_id'])) { echo $_GET['registration_id']; } ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="studentFirstName">Full Name<span class="text-danger">*</span></label>
                                <input type="text" name="full_name" class="form-control" id="studentFirstName" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="studentMiddleName">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control" id="studentMiddleName" placeholder="Deepak">
                            </div>
                            <div class="form-group">
                                <label for="studentLastName">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="studentLastName" placeholder="Jadhwani">
                            </div>
                            <div class="form-group">
                                <label for="studentMotherName">Mother's Maiden Name</label>
                                <input type="text" name="mother_maiden_name" class="form-control" id="studentMotherName" placeholder="Mee   na">
                            </div> -->
                            <div class="form-group">
                                <label for="studentDOB">Date of Birth<span class="text-danger">*</span></label>
                                <input type="date" name="date_of_birth" class="form-control w-50" id="studentDOB" placeholder="mm/dd/yyyy" required>
                            </div>
                            <div class="form-group">
                                <label for="studentGender">Gender<span class="text-danger">*</span></label>
                                <div class="form-control" name="gender" id="studentGender">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_f" value="Female" checked>
                                        <label class="form-check-label" for="gender_f">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_m" value="Male">
                                        <label class="form-check-label" for="gender_m">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_o" value="Others">
                                        <label class="form-check-label" for="gender_o">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Student Contact Information -->
                        <div id="studentContactInfo">
                            <div class="form-group">
                                <label for="studentEmail">Email address<span class="text-danger">*</span></label>
                                <input type="email" name="student_email" class="form-control" id="studentEmail" placeholder="name@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="studentPhone">Student's Mobile Number<span class="text-danger">*</span></label>
                                <input type="number" name="student_mobile_number" class="form-control" id="studentPhone" min=1000000000 max=9999999999 required>
                            </div>
                            <div class="form-group">
                                <label for="studentCategory">Category<span class="text-danger">*</span></label>
                                <div class="form-control" name="category" id="studentCategory">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="category" id="category_General" value="General" checked>
                                        <label class="form-check-label" for="category_General">General</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="category" id="category_OBC" value="OBC">
                                        <label class="form-check-label" for="category_OBC">OBC</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="category" id="category_SC" value="SC">
                                        <label class="form-check-label" for="category_SC">SC</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="category_ST" value="ST">
                                        <label class="form-check-label" for="category_ST">ST</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="studentPC">Physically Challenged<span class="text-danger">*</span></label>
                                <div class="form-control" name="physically_challenged" id="studentPC">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="physically_challenged" id="pc_Y" value="Yes">
                                        <label class="form-check-label" for="pc_Y">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="physically_challenged" id="pc_N" value="No" checked>
                                        <label class="form-check-label" for="pc_N">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Education : Earlier School and College information -->
                        <div id="educationInfo">
                            <!-- SSC -->
                            <div id="sscInfo">
                                <div class="form-group">
                                    <label for="sscSchool">School Name (10th Class)<span class="text-danger">*</span></label>
                                    <input type="text" name="ssc_school_name" class="form-control" id="sscSchool" required>
                                </div>
                                <div class="form-group">
                                    <label for="sscBoard">10th Board<span class="text-danger">*</span></label>
                                    <div class="form-control" id="sscBoard">
                                        <div class="form-check form-check-inline pr-2">
                                            <input class="form-check-input" type="radio" name="ssc_board" id="ssc_board1" value="CBSE" checked>
                                            <label class="form-check-label" for="ssc_board1">CBSE</label>
                                        </div>
                                        <div class="form-check form-check-inline pr-3">
                                            <input class="form-check-input" type="radio" name="ssc_board" id="ssc_board2" value="MP">
                                            <label class="form-check-label" for="ssc_board2">MP</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="ssc_board" id="ssc_board3" value="Others">
                                            <label class="form-check-label" for="ssc_board3">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sscPercentage">10th Board Marks(in Percentage)<span class="text-danger">*</span></label>
                                    <input type="number" name="ssc_marks" class="form-control" id="sscPercentage" placeholder="00" min=0 max=100 required>
                                </div>
                                <div class="form-group">
                                    <label for="sscYop">Year of Passing(10th)<span class="text-danger">*</span></label>
                                    <input type="number" name="ssc_yop" class="form-control" id="sscYop" onchange="yopMinMax();" required>
                                </div>
                            </div>
                            <!-- HSC -->
                            <div id="hscInfo">
                                <div class="form-group">
                                    <label for="hscSchool">School Name (12th Class)</label>
                                    <input type="text" name="hsc_school_name" class="form-control" id="hscSchool">
                                </div>
                                <div class="form-group">
                                    <label for="hscBoard">12th Board</label>
                                    <div class="form-control" id="hscBoard">
                                        <div class="form-check form-check-inline pr-2">
                                            <input class="form-check-input" type="radio" name="hsc_board" id="hsc_board1" value="CBSE">
                                            <label class="form-check-label" for="hsc_board1">CBSE</label>
                                        </div>
                                        <div class="form-check form-check-inline pr-3">
                                            <input class="form-check-input" type="radio" name="hsc_board" id="hsc_board2" value="MP">
                                            <label class="form-check-label" for="hsc_board2">MP</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="hsc_board" id="hsc_board3" value="Others">
                                            <label class="form-check-label" for="hsc_board3">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hscPercentage">12th Board Marks(in Percentage)</label>
                                    <input type="number" name="hsc_marks" class="form-control" id="hscPercentage" placeholder="00" min=0 max=100>
                                </div>
                                <div class="form-group">
                                    <label for="hscYop">Year of Passing(12th)</label>
                                    <input type="number" name="hsc_yop" class="form-control" id="hscYop" onchange="yopMinMax();">
                                </div>
                            </div>    

                            <!-- Diploma(If applicable) (for Engineering i.e. CDGI)-->
                            <div id="diplomaInfo">
                                <div class="form-group">
                                    <label for="diploma">Diploma<span class="text-danger">*</span></label>
                                    <div class="form-control" id="diploma">
                                        <div class="form-check form-check-inline pr-2">
                                            <input class="form-check-input" type="radio" name="diploma_done" id="diploma_done1" value="Yes" onchange='isDiplomaDone();' checked>
                                            <label class="form-check-label" for="diploma_done1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline pr-3">
                                            <input class="form-check-input" type="radio" name="diploma_done" id="diploma_done2" value="No" onchange='isDiplomaDone();'>
                                            <label class="form-check-label" for="diploma_done2">No</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- If Diploma is yes -->
                                <div class="form-group">
                                    <label for="diplomaCollege">College Name (Diploma)</label>
                                    <input type="text" name="diploma_school_name" class="form-control" id="diplomaCollege"> 
                                </div>
                                <div class="form-group">
                                    <label for="diplomaBoard">Diploma Board</label>
                                    <div class="form-control" id="diplomaBoard">
                                        <div class="form-check form-check-inline pr-2">
                                            <input class="form-check-input" type="radio" name="diploma_board" id="diploma_board1" value="CBSE" checked>
                                            <label class="form-check-label" for="diploma_board1">CBSE</label>
                                        </div>
                                        <div class="form-check form-check-inline pr-3">
                                            <input class="form-check-input" type="radio" name="diploma_board" id="diploma_board2" value="MP">
                                            <label class="form-check-label" for="diploma_board2">MP</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="diploma_board" id="diploma_board3" value="Others">
                                            <label class="form-check-label" for="diploma_board3">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="diplomaPercentage">Diploma Marks(in Percentage)</label>
                                    <input type="number" name="diploma_marks" class="form-control" id="diplomaMarks" placeholder="00" min=0 max=100>
                                </div>
                                <!-- Single selection diploma branch -->
                                <div class="form-group">
                                    <label for="diplomaBranch">Diploma Branch</label>
                                    <select class="form-control" name="diploma_branch" id="diplomaBranch">
                                        <option>Computer Science (CS)</option>
                                        <option>Informaton Technology (IT)</option>
                                        <option>Civil (CE)</option>
                                        <option>Mechanical (ME)</option>
                                        <option>Electronics and Communication (EC)</option>
                                        <option>Electrical (EE)</option>
                                    </select>
                                </div>
                            </div>    

                            <!-- IIT JEE (for Engineering i.e. CDGI)-->
                            <div id="iitJeeInfo">
                                <div class="form-group">
                                    <label for="iitJee">IIT JEE appeared?</label>
                                    <div class="form-control" id="iitJee">
                                        <div class="form-check form-check-inline pr-2">
                                            <input class="form-check-input" type="radio" name="iit_jee_appeared" id="iit_jee_appearedY" value="Yes" onchange='isIITDone();'>
                                            <label class="form-check-label" for="iit_jee_appeared1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline pr-3">
                                            <input class="form-check-input" type="radio" name="iit_jee_appeared" id="iit_jee_appearedN" value="No" onchange='isIITDone();'>
                                            <label class="form-check-label" for="iit_jee_appeared2">No</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- If IIT JEE is yes -->
                                <div class="form-group">
                                    <label for="iitJeeMarks">IIT JEE Marks</label>
                                    <input type="number" name="iit_jee_marks" class="form-control" id="iitJeeMarks" placeholder="000" min=0 max=360>
                                </div>
                            </div>
                        </div>

                        <!-- Student Other Information -->
                        <div id="studentOtherInfo">
                            <div class="form-group">
                                <label for="aadharNumber">Aadhar Number</label>
                                <input type="number" name="aadhar_number" class="form-control" id="aadharNumber" min=100000000000 max=999999999999>
                            </div>
                            <div class="form-group">
                                <label for="samagrahaId">Samagraha ID</label>
                                <input type="number" name="samagraha_id" class="form-control" id="samagrahaId" min=100000000 max=999999999>
                            </div>
                        </div>
                    </div>

                    <!-- Family Information -->
                    <div id="familyInfo">
                        <div class="form-group">
                            <label for="fatherName">Father's Name<span class="text-danger">*</span></label>
                            <input type="text" name="father_name" class="form-control" id="fatherName" required>
                        </div>
                        <div class="form-group">
                            <label for="fatherPhone">Father's Mobile Number<span class="text-danger">*</span></label>
                            <input type="number" name="father_mobile_number" class="form-control" id="fatherPhone" min=1000000000 max=9999999999 required>
                        </div>
                        <div class="form-group">
                            <label for="fatherOccupation">Father's Occupation</label>
                            <input type="text" name="occupation" class="form-control" id="fatherOccupation">
                        </div>
                        <div class="form-group">
                            <label for="fatherAnnualIncome">Father's Annual Income</label>
                            <input type="number" name="annual_income" class="form-control" id="fatherAnnualIncome">
                        </div>
                        <div class="form-group">
                            <label for="motherName">Mother's Name<span class="text-danger">*</span></label>
                            <input type="text" name="mother_name" class="form-control" id="motherName" required>
                        </div>
                        <div class="form-group">
                            <label for="motherPhone">Mother's Mobile Number<span class="text-danger">*</span></label>
                            <input type="number" name="mother_mobile_number" class="form-control" id="motherPhone" min=1000000000 max=9999999999 required>
                        </div>
                    </div>
                    
                    <!-- Agent, Self or Others Information -->
                    <div id="agentInfo">
                        <div class="form-group">
                            <label for="throughAgent">Through Agent<span class="text-danger">*</span></label>
                            <div class="form-control" id="throughAgent">
                                <div class="form-check form-check-inline pr-2">
                                    <input class="form-check-input" type="radio" name="through_agent" id="through_agent1" value="Yes" onchange='isAgentYes();'>
                                    <label class="form-check-label" for="through_agent1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline pr-3">
                                    <input class="form-check-input" type="radio" name="through_agent" id="through_agent2" value="No" onchange='isAgentYes();'>
                                    <label class="form-check-label" for="through_agent2">No</label>
                                </div>
                            </div>
                        </div>
                        <!-- If through Agent is yes -->
                        <div class="form-group">
                            <label for="agentName">Agent's Name</label>
                            <input type="text" name="agent_name" class="form-control" id="agentName">
                        </div>
                        <div class="form-group">
                            <label for="agentPhone">Agent's Mobile Number</label>
                            <input type="number" name="agent_mobile_number" class="form-control" id="agentPhone" min=1000000000 max=9999999999>
                        </div>
                        <!-- If through agent is no -->
                        <div class="form-group">
                            <label for="throughWhom">Through Whom?</label>
                            <div class="form-control" id="throughWhom">
                                <div class="form-check form-check-inline pr-2">
                                    <input class="form-check-input" type="radio" name="through_whom" id="through_whom1" value="Self" onchange='isSelfYes();'>
                                    <label class="form-check-label" for="through_whom1">Self</label>
                                </div>
                                <div class="form-check form-check-inline pr-3">
                                    <input class="form-check-input" type="radio" name="through_whom" id="through_whom2" value="Others" onchange='isSelfYes();'>
                                    <label class="form-check-label" for="through_whom2">Others</label>
                                </div>
                            </div>
                        </div>
                        <!-- If through others -->
                        <div class="form-group">
                            <label for="otherPersonName">Person's Name</label>
                            <input type="text" name="other_person_name" class="form-control" id="otherPersonName">
                        </div>
                        <div class="form-group">
                            <label for="otherPersonRelation">Relation</label>
                            <input type="text" name="other_person_relation" class="form-control" id="otherPersonRelation">
                        </div>
                        <div class="form-group">
                            <label for="otherPersonInCGI">Is this person studying in CDGI,CDIP or CDIPS?</label>
                            <div class="form-control" id="otherPersonInCGI">
                                <div class="form-check form-check-inline pr-2">
                                    <input class="form-check-input" type="radio" name="other_person_same_college" id="other_person_same_college1" value="Yes">
                                    <label class="form-check-label" for="other_person_same_college1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline pr-3">
                                    <input class="form-check-input" type="radio" name="other_person_same_college" id="other_person_same_college2" value="No">
                                    <label class="form-check-label" for="other_person_same_college2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="instituteInfoSource">How did you come to know about our Institute?<span class="text-danger">*</span></label>
                            <select class="form-control" name="institute_info_src" id="instituteInfoSource">
                                <option>Electronics(Social Media)</option>
                                <option>Newspaper</option>
                                <option>Olympiad</option>
                                <option>Science Model Camp</option>
                                <option>Campus Visit</option>
                                <option>CDGI Website</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Engineering Branch admitted to i.e Admission in CDGI(Chameli Devi Group of Institutes) -->
                    <div class="form-group">
                        <label for="engineeringBranch1">Engineering Branch Preference 1<span class="text-danger">*</span></label>
                        <select class="form-control" name="current_course" id="engineeringBranch1">
                            <option>Computer Science (CS)</option>
                            <option>Informaton Technology (IT)</option>
                            <option>Civil (CE)</option>
                            <option>Mechanical (ME)</option>
                            <option>Electronics and Communication (EC)</option>
                            <option>Electrical (EE)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="engineeringBranch2">Engineering Branch Preference 2<span class="text-danger">*</span></label>
                        <select class="form-control" name="current_course_2" id="engineeringBranch2">
                            <option>Computer Science (CS)</option>
                            <option>Informaton Technology (IT)</option>
                            <option>Civil (CE)</option>
                            <option>Mechanical (ME)</option>
                            <option>Electronics and Communication (EC)</option>
                            <option>Electrical (EE)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="engineeringBranch3">Engineering Branch Preference 3<span class="text-danger">*</span></label>
                        <select class="form-control" name="current_course_3" id="engineeringBranch3">
                            <option>Computer Science (CS)</option>
                            <option>Informaton Technology (IT)</option>
                            <option>Civil (CE)</option>
                            <option>Mechanical (ME)</option>
                            <option>Electronics and Communication (EC)</option>
                            <option>Electrical (EE)</option>
                        </select>
                    </div>

                    <!-- Remarks -->
                    <div class="form-group">
                        <label for="remarks">Any Remarks</label>
                        <textarea name="remarks" rows=2 class="form-control" id="remarks"></textarea>
                    </div>
                    
                    <!--Submit and Back Buttons -->
                    <div class="row mt-4">
                        <div class="offset-4 col-2 text-right">
                            <button type="submit" class="btn btn-primary btn-block" name="registerCDGI">Register</button>
                        </div>
                        <div class="col-2 text-left">
                            <a href='home.php' class="btn btn-danger btn-block">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>