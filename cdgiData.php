<?php include('index.php');?>
<?php include('data.php');?>
<body>
    <div class="container mt-3">
        <?php if ( isset($cdgiData) ) : ?>
            <table class="table table-sm table-bordered text-center align-middle-custom">
                <thead class="header-bg-color">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Registration Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Mother's Maiden Name</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email Id</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Alternate Mobile Number</th>
                        <th scope="col">Category</th>
                        <th scope="col">Physically Challenged</th>
                        <th scope="col">Aadhar Naumber</th>
                        <th scope="col">Samagraha Id</th>
                        <th scope="col">Father's Name</th>
                        <th scope="col">Father's Mobile Number</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Annual Income</th>
                        <th scope="col">Mother's Name</th>
                        <th scope="col">Mother's Mobile Number</th>
                        <th scope="col">Through Agent</th>
                        <th scope="col">Agent Name</th>
                        <th scope="col">Agent Mobile Number</th>
                        <th scope="col">Through whom</th>
                        <th scope="col">Other Person's name</th>
                        <th scope="col">Other Person's Relation</th>
                        <th scope="col">Is Other Person's in CDGI?</th>
                        <th scope="col">SSC School</th>
                        <th scope="col">SSC Board</th>
                        <th scope="col">SSC Marks(in %)</th>
                        <th scope="col">HSC School</th>
                        <th scope="col">HSC Board</th>
                        <th scope="col">HSC Marks(in %)</th>
                        <th scope="col">Diploma Done</th>
                        <th scope="col">Diploma College</th>
                        <th scope="col">Diploma Board</th>
                        <th scope="col">Diploma Marks</th>
                        <th scope="col">Diploma Branch</th>
                        <th scope="col">IIT JEE Appeared</th>
                        <th scope="col">IIT JEE Marks</th>
                        <th scope="col">Current Course</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                    <?php endwhile;?>
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Larry</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>
        <?php else: ?>
            <div class ="page-header">
                <h1> No data Found </h1>
            </div>
        <?php endif; ?>
</div>
</body>