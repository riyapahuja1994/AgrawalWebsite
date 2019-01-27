<?php include('server.php');?>
<?php include('index.php');?>
<body>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header text-center header-bg-color">CDIP Student Registration</h5>
            <div class="card-body">
                <form method="post" action="server.php">
                    <!-- Personal Information -->
                    <div id="personalInfo">
                        <!-- Student Basic Information -->
                        <div id="studentBasicInfo">
                            <div class="form-group">
                                <label for="studentId">Student Registration Id</label>
                                <input type="text" name="registration_id" class="form-control" id="studentId" disabled value="<?php echo $registration_id; ?>">
                            </div>
                            <div class="form-group">
                                <label for="studentFirstName">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="studentFirstName" placeholder="Harsha">
                            </div>
                            <div class="form-group">
                                <label for="studentMiddleName">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control" id="studentMiddleName" placeholder="Deepak">
                            </div>
                            <div class="form-group">
                                <label for="studentLastName">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="studentLastName" placeholder="Jadhwani">
                            </div>
                            <div class="form-group">
                                <label for="studentMotherName">Mother's Maiden Name</label>
                                <input type="text" name="mother_maiden_name" class="form-control" id="studentMotherName" placeholder="Meena">
                            </div>
                            <div class="form-group">
                                <label for="studentDOB">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" id="studentDOB" placeholder="mm/dd/yyyy">
                            </div>
                            <div class="form-group">
                                <label for="studentGender">Gender</label>
                                <div class="form-control" name="gender" id="studentGender">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Female">
                                        <label class="form-check-label" for="inlineRadio1">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Male">
                                        <label class="form-check-label" for="inlineRadio2">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                                        <label class="form-check-label" for="inlineRadio3">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Student Contact Information -->
                        <div id="studentContactInfo">
                            <div class="form-group">
                                <label for="studentEmail">Email address</label>
                                <input type="email" name="student_email" class="form-control" id="studentEmail" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="studentPhone">Student's Mobile Number</label>
                                <input type="number" name="student_mobile_number" class="form-control" id="studentPhone" placeholder="0000000000">
                            </div>
                            <div class="form-group">
                                <label for="studentPhone2">Alternate Mobile Number</label>
                                <input type="number" name="student_alternate_number" class="form-control" id="studentPhone2" placeholder="0000000000">
                            </div>
                            <div class="form-group">
                                <label for="studentCategory">Category</label>
                                <div class="form-control" name="category" id="studentCategory">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="General">
                                        <label class="form-check-label" for="inlineRadio1">General</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="OBC">
                                        <label class="form-check-label" for="inlineRadio2">OBC</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio3" value="SC">
                                        <label class="form-check-label" for="inlineRadio3">SC</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio3" value="ST">
                                        <label class="form-check-label" for="inlineRadio3">ST</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Student Other Information -->
                        <div id="studentOtherInfo">
                            <div class="form-group">
                                <label for="studentPC">Physically Challenged</label>
                                <div class="form-control" name="physically_challenged" id="studentPC">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="physically_challenged" id="inlineRadio1" value="Yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="physically_challenged" id="inlineRadio2" value="No">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="aadharNumber">Aadhar Number</label>
                                <input type="number" name="aadhar_number" class="form-control" id="aadharNumber" placeholder="0000000000">
                            </div>
                            <div class="form-group">
                                <label for="samagrahaId">Samagraha ID</label>
                                <input type="number" name="samagraha_id" class="form-control" id="samagrahaId" placeholder="0000000000">
                            </div>
                        </div>
                    </div>

                    <!-- Family Information -->
                    <div id="familyInfo">
                        <div class="form-group">
                            <label for="fatherName">Father's Name</label>
                            <input type="text" name="father_name" class="form-control" id="fatherName">
                        </div>
                        <div class="form-group">
                            <label for="fatherPhone">Father's Mobile Number</label>
                            <input type="number" name="father_mobile_number" class="form-control" id="fatherPhone" placeholder="0000000000">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleFormControlInput1">Alternate Mobile Number</label>
                            <input type="number" class="form-control" id="studentPhone2" placeholder="0000000000">
                        </div> -->
                        <div class="form-group">
                            <label for="fatherOccupation">Father's Occupation</label>
                            <input type="text" name="occupation" class="form-control" id="fatherOccupation" placeholder="Occupation">
                        </div>
                        <div class="form-group">
                            <label for="fatherAnnualIncome">Father's Annual Income</label>
                            <input type="number" name="annual_income" class="form-control" id="fatherAnnualIncome" placeholder="0000000000">
                        </div>
                        <div class="form-group">
                            <label for="motherName">Mother's Name</label>
                            <input type="text" name="mother_name" class="form-control" id="motherName">
                        </div>
                        <div class="form-group">
                            <label for="motherPhone">Mother's Mobile Number</label>
                            <input type="number" name="mother_mobile_number" class="form-control" id="motherPhone" placeholder="0000000000">
                        </div>
                    </div>
                    
                    <!-- Agent, Self or Others Information -->
                    <div id="agentInfo">
                        <div class="form-group">
                            <label for="throughAgent">Through Agent</label>
                            <div class="form-control" id="throughAgent">
                                <div class="form-check form-check-inline pr-2">
                                    <input class="form-check-input" type="radio" name="through_agent" id="through_agent1" value="Yes">
                                    <label class="form-check-label" for="through_agent1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline pr-3">
                                    <input class="form-check-input" type="radio" name="through_agent" id="through_agent2" value="No">
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
                                <input type="number" name="agent_mobile_number" class="form-control" id="agentPhone" placeholder="0000000000">
                            </div>
                        <!-- If through agent is no -->
                        <div class="form-group">
                            <label for="throughWhom">Through</label>
                            <div class="form-control" id="throughWhom">
                                <div class="form-check form-check-inline pr-2">
                                    <input class="form-check-input" type="radio" name="through_whom" id="through_whom1" value="Self">
                                    <label class="form-check-label" for="through_whom1">Self</label>
                                </div>
                                <div class="form-check form-check-inline pr-3">
                                    <input class="form-check-input" type="radio" name="through_whom" id="through_whom2" value="Others">
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
                                <label for="otherPersonInCGI">Is this person studying in CDIPS?</label>
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
                    </div>

                    <!-- Education : Earlier School and College information -->
                    <div id="educationInfo">
                        <!-- SSC -->
                        <div id="sscInfo">
                            <div class="form-group">
                                <label for="sscSchool">School Name (10th Class)</label>
                                <input type="text" name="ssc_school_name" class="form-control" id="sscSchool">
                            </div>
                            <div class="form-group">
                                <label for="sscBoard">10th Board</label>
                                <div class="form-control" id="sscBoard">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="ssc_board" id="ssc_board1" value="CBSE">
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
                                <label for="sscPercentage">10th Board Marks(in Percentage)</label>
                                <input type="number" name="ssc_marks" class="form-control" id="sscPercentage" placeholder="00">
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
                                <input type="number" name="hsc_marks" class="form-control" id="hscPercentage" placeholder="000">
                            </div>
                        </div>    
                    </div>
            
                    <!-- For Management Course opted i.e Admission in CDIPS(Chameli Devi Institute of Professional Studies) -->
                    <div class="form-group">
                        <label for="PSBranch">Pharmacy Course</label>
                        <select class="form-control" name="current_course" id="pharmaCourse">
                            <option>B.Pharma</option>
                            <option>D.Pharma</option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div id="passwordInfo">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirmPassword" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="registerCDIP">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>