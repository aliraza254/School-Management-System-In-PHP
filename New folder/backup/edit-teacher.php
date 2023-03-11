<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
                        <li class="breadcrumb-item active">Edit Teachers</li>
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
                            $teacher_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM teacher_data WHERE id='$teacher_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $teacher = mysqli_fetch_array($query_run);
                                ?>
                        <form action="function.php" method="POST">
                            <input type="hidden" name="id" value="<?= $teacher['id']; ?>">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Teacher ID</label>
                                        <input type="text" class="form-control" name="teacher_id" value="<?= $teacher['teacher_id']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="teacher_name" value="<?= $teacher['teacher_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select  name="t_gender" class="form-control">
                                            <option name="t_gender" value="male">Male</option>
                                            <option name="t_gender" value="female">Female</option>
                                            <option name="t_gender" value="others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="text" class="form-control" name="t_dob" value="<?= $teacher['t_dob']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" name="t_mobile" value="<?= $teacher['t_mobile']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Joining Date</label>
                                        <input type="text" class="form-control" name="t_joining_date" value="<?= $teacher['t_joining_date']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input class="form-control" type="text" name="t_qualification" value="<?= $teacher['t_qualification']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input class="form-control" type="text" name="t_experience" value="<?= $teacher['t_experience']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5 class="form-title"><span>Login Details</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="t_username" value="<?= $teacher['t_username']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" name="t_email" value="<?= $teacher['t_email']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="t_password" value="<?= $teacher['t_password']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Repeat Password</label>
                                        <input type="password" class="form-control" name="t_repeat_password" value="<?= $teacher['t_repeat_password']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5 class="form-title"><span>Address</span></h5>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="t_address" value="<?= $teacher['t_address']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="t_city" value="<?= $teacher['t_city']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" name="t_state" value="<?= $teacher['t_state']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" name="t_zipcode" value="<?= $teacher['t_zipcode']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="t_country" value="<?= $teacher['t_country']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="update_teacher" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form><?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>