<?php include('index.php');?>
<?php include('login.php');?>
<body>
    <div>
        <nav class="navbar navbar-primary pl-5 pr-5 header-bg-color mb-3">
            <!-- <a class="navbar-brand" href="#"> -->
                <img src="img/cdgi-logo.png" width="100" height="100" class="d-inline-block align-top" alt="CDGI">
            <!-- </a> -->
            <div class="d-inline-block text-center">
                <h2>CHAMELI DEVI GROUP OF INSTITUTIONS</h2>
                <h4>KHANDWA ROAD, INDORE, MADHYA PRADESH</h4>
            </div>
            <img src="img/ag-logo.jpg" width="100" height="100" class="d-inline-block align-top" alt="Agrawal Group">
        </nav>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="container mt-5">
                <div class="alert alert-success mt-5 mb-5 text-center">
                    Login Successful.
                    <?php 
                        echo $_SESSION['success'];
                    ?>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-sm-4">
                        <div class="card text-center">
                        <h5 class="card-header">CDGI</h5>
                        <img class="card-img-top pl-5 pr-5 pt-2 pb-0" src="img/cdgi-logo.png" alt="Card image cap">
                        <div class="card-body card-body-border-top">
                            <!-- <p class="card-text"></p> -->
                            <a href="CDGIRegistrationForm.php" class="btn btn-primary">View Data</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                        <h5 class="card-header">CDIP</h5>
                        <img class="card-img-top pl-5 pr-5 pt-2 pb-0" src="img/cdip-logo.jpg" alt="Card image cap">
                        <div class="card-body card-body-border-top">
                            <!-- <p class="card-text"></p> -->
                            <a href="CDIPRegistrationForm.php" class="btn btn-primary">View Data</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                        <h5 class="card-header">CDIPS</h5>
                        <img class="card-img-top pl-5 pr-5 pt-2 pb-0" src="img/cdips-logo1.jpg" alt="Card image cap">
                        <div class="card-body card-body-border-top">
                            <!-- <p class="card-text"></p> -->
                            <a href="CDIPSRegistrationForm.php" class="btn btn-primary">View Data</a>
                        </div>
                        </div>
                    </div>
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