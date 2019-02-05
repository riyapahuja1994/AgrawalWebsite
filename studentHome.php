<?php include('index.php');?>
<?php include('server.php');?>
<body>
    <div>
        <nav class="navbar navbar-primary pl-5 pr-5 header-bg-color">
            <!-- <a class="navbar-brand" href="#"> -->
                <img src="img/cdgi-logo.png" width="100" height="100" class="d-inline-block align-top" alt="CDGI">
            <!-- </a> -->
            <div class="d-inline-block text-center">
                <h2>CHAMELI DEVI GROUP OF INSTITUTIONS</h2>
                <h4>KHANDWA ROAD, INDORE, MADHYA PRADESH</h4>
            </div>
            <img src="img/ag-logo.jpg" width="100" height="100" class="d-inline-block align-top" alt="Agrawal Group">
        </nav>
        <div class="container mt-5">
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success mt-5 mb-5 text-center">
                    <?php 
                        echo $_SESSION['success'];
                        echo 'Your registration id is '.$_SESSION['registration_id'];
                    ?>
                </div>
            <?php else: ?>
                <div class="alert alert-danger mt-5 mb-5 text-center">
                    <?php 
                        echo $_SESSION['error'];
                    ?>
                </div>
            <?php endif ?>
            <div class="row mt-5 mb-4">
                <!-- ?php if(isset($_SESSION['student_id']) && (strpos($_SESSION['student_id'], 'CDGI') !== false)): ?> -->
                <?php if(isset($_SESSION['field'])): ?>
                    <div class="offset-sm-3 col-sm-3">
                        <a href="home.php" class="btn btn-primary btn-lg btn-block">Home</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo $_SESSION['field'];?>RegistrationForm.php" class="btn btn-primary btn-lg btn-block"><?php echo $_SESSION['field']; ?> Registration</a>
                    </div>
                <?php else: ?>
                    <div class="offset-sm-4 col-sm-4">
                        <a href="home.php" class="btn btn-primary btn-lg btn-block">Home</a>
                    </div>
                <?php endif ?>
            </div>
        </div>
        <?php 
            if(isset($_SESSION['success']))
            {
                unset($_SESSION['success']);
                unset($_SESSION['registration_id']);
                unset($_SESSION['field']);
            }
            else
            {
                unset($_SESSION['error']);
                unset($_SESSION['registration_id']);
                unset($_SESSION['field']);
            }
        ?>
    </div>
</body>