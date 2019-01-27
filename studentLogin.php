<?php include('index.php');?>
<?php include('login.php');?>
<body>
    <div class="container mt-5">
        <div class="row mt-5 mb-5">
            <div class="offset-sm-3 col-sm-6 pl-5 pr-5">
                <div class="card">
                <h5 class="card-header text-center header-bg-color">Student login</h5>
                <div class="card-body card-body-border-top">
                    <form method="post" action="login.php">
                    <!-- <p class="card-text"></p> -->
                    <div class="form-group ">
                        <label for="studentId">Student ID</label>
                        <input type="text" name="student_id" class="form-control" id="studentId">
                    </div>
                    <div class="form-group">
                        <label for="studentPassword">Password</label>
                        <input type="password" name="student_password" class="form-control" id="studentPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="loginStudent">Login</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>