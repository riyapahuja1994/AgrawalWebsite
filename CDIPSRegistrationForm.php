<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrawal Group of Institutes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" src="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header text-center">Register</h5>
            <div class="card-body">
                <form>
                    <!-- Personal Information -->
                    <div id="personalInfo">
                        <!-- Student Basic Information -->
                        <div id="studentBasicInfo">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student Registration Id</label>
                                <input type="text" class="form-control" id="studentId" placeholder="YOP_BRANCH_AUTOINCREMENTNUM">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">First Name</label>
                                <input type="text" class="form-control" id="studentFirstName" placeholder="Harsha">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Middle Name</label>
                                <input type="text" class="form-control" id="studentMiddleName" placeholder="Deepak">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Last Name</label>
                                <input type="text" class="form-control" id="studentLastName" placeholder="Jadhwani">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Mother's Maiden Name</label>
                                <input type="text" class="form-control" id="studentMotherName" placeholder="Meena">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Date of Birth</label>
                                <input type="date" class="form-control" id="studentDOB" placeholder="mm/dd/yyyy">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Gender</label>
                                <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                                <div class="form-control" id="studentGender">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Student Contact Information -->
                        <div id="studentContactInfo">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="studentEmail" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student's Mobile Number</label>
                                <input type="number" class="form-control" id="studentPhone" placeholder="0000000000">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Alternate Mobile Number</label>
                                <input type="number" class="form-control" id="studentPhone2" placeholder="0000000000">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Category</label>
                                <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                                <div class="form-control" id="studentCategory">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">General</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">OBC</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">SC</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">ST</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Student Other Information -->
                        <div id="studentOtherInfo">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Physically Challenged</label>
                                <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                                <div class="form-control" id="studentPC">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Aadhar Number</label>
                                <input type="number" class="form-control" id="studentPhone2" placeholder="0000000000">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Samagraha ID</label>
                                <input type="number" class="form-control" id="studentPhone2" placeholder="0000000000">
                            </div>
                        </div>
                    </div>

                    <!-- Family Information -->
                    <div id="familyInfo">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Father's Name</label>
                            <input type="text" class="form-control" id="fatherName">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Father's Mobile Number</label>
                            <input type="number" class="form-control" id="fatherPhone" placeholder="0000000000">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleFormControlInput1">Alternate Mobile Number</label>
                            <input type="number" class="form-control" id="studentPhone2" placeholder="0000000000">
                        </div> -->
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Father's Occupation</label>
                            <input type="text" class="form-control" id="fatherOccupation" placeholder="Occupation">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Father's Annual Income</label>
                            <input type="number" class="form-control" id="fatherAnnualIncome" placeholder="0000000000">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mother's Name</label>
                            <input type="text" class="form-control" id="motherName">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mother's Mobile Number</label>
                            <input type="number" class="form-control" id="motherPhone" placeholder="0000000000">
                        </div>
                    </div>
                    
                    <!-- Agent, Self or Others Information -->
                    <div id="agentInfo">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Through Agent</label>
                            <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                            <div class="form-control" id="throughAgent">
                                <div class="form-check form-check-inline pr-2">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline pr-3">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <!-- If through Agent is yes -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Agent's Name</label>
                                <input type="text" class="form-control" id="agentName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Agent's Mobile Number</label>
                                <input type="number" class="form-control" id="agentPhone" placeholder="0000000000">
                            </div>
                        <!-- If through agent is no -->
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Through</label>
                            <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                            <div class="form-control" id="throughWhom">
                                <div class="form-check form-check-inline pr-2">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Self</label>
                                </div>
                                <div class="form-check form-check-inline pr-3">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Others</label>
                                </div>
                            </div>
                        </div>
                        <!-- If through others -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Person's Name</label>
                                <input type="text" class="form-control" id="otherPersonName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Relation</label>
                                <input type="text" class="form-control" id="otherPersonRelation">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Is this person studying in CDIPS?</label>
                                <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                                <div class="form-control" id="otherPersonInCGI">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- Education : Earlier School and College information -->
                    <div id="educationInfo">
                        <!-- SSC -->
                        <div id="sscInfo">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">School Name (10th Class)</label>
                                <input type="text" class="form-control" id="sscSchool">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">10th Board</label>
                                <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                                <div class="form-control" id="sscBoard">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">CBSE</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">MP</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">Others</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">10th Board Marks(in Percentage)</label>
                                <input type="number" class="form-control" id="sscPercentage" placeholder="00">
                            </div>
                        </div>
                        <!-- HSC -->
                        <div id="hscInfo">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">School Name (12th Class)</label>
                                <input type="text" class="form-control" id="hscSchool">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">12th Board</label>
                                <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                                <div class="form-control" id="hscBoard">
                                    <div class="form-check form-check-inline pr-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">CBSE</label>
                                    </div>
                                    <div class="form-check form-check-inline pr-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">MP</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">Others</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">12th Board Marks(in Percentage)</label>
                                <input type="number" class="form-control" id="hscPercentage" placeholder="00">
                            </div>
                        </div>    
                    </div>
            
                    <!-- For Management Course opted i.e Admission in CDIPS(Chameli Devi Institute of Professional Studies) -->
                    <div class="form-group">
                        <label for="PSBranch">Professional Studies Course</label>
                        <select class="form-control" id="PSBranch">
                            <option>MBA</option>
                            <option>BBA</option>
                            <option>B.Sc (Computer)</option>
                            <option>B.Com (Computer)</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>