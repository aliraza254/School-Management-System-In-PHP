<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                        <li class="breadcrumb-item active">Edit Students</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                    <?php
                        include('config.php');
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM std_data WHERE id='$student_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                            <form  action="function.php" method="POST">
                            <input type="hidden" name="id" value="<?= $student['id']; ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Student Information</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name='std_f_name' value="<?= $student['std_f_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name='std_l_name' value="<?= $student['std_l_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Class</label>
                                            <input type="text" class="form-control" name='std_class' value="<?= $student['std_class']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Student Id</label>
                                            <input type="text" class="form-control" name='std_id' value="<?= $student['std_id']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Admission Number</label>
                                            <input type="text" class="form-control" name='std_admission_number' value="<?= $student['std_admission_number']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input type="text" class="form-control" name='std_gender' value="<?= $student['std_gender']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Joining Date</label>
                                            <div>
                                                <input type="text" class="form-control" name='std_joining_date' value="<?= $student['std_joining_date']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div>
                                                <input type="text" class="form-control" name='std_dob' value="<?= $student['std_dob']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <input type="text" class="form-control" name='std_religion' value="<?= $student['std_religion']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Student Image</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Parent Information</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" class="form-control" name='std_father_name' value="<?= $student['std_father_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's Occupation</label>
                                            <input type="text" class="form-control" name='std_father_occupation' value="<?= $student['std_father_occupation']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's Mobile</label>
                                            <input type="text" class="form-control" name='std_father_mobile' value="<?= $student['std_father_mobile']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's CNIC</label>
                                            <input type="text" class="form-control" name='std_father_cnic' value="<?= $student['std_father_cnic']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's Email</label>
                                            <input type="email" class="form-control" name='std_father_email' value="<?= $student['std_father_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mother's Name</label>
                                            <input type="text" class="form-control" name='std_mother_name' value="<?= $student['std_mother_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mother's Occupation</label>
                                            <input type="text" class="form-control" name='std_mother_occupation' value="<?= $student['std_mother_occupation']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mother's Mobile</label>
                                            <input type="text" class="form-control" name='std_mother_mobile_number' value="<?= $student['std_mother_mobile_number']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mother's Email</label>
                                            <input type="email" class="form-control" name='std_mother_email' value="<?= $student['std_mother_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Present Address</label>
                                            <input class="form-control" name='std_present_address' value="<?= $student['std_present_address']; ?>"></input>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <input class="form-control" name='std_permanent_address' value="<?= $student['std_permanent_address']; ?>" ></input>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="update_student" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>