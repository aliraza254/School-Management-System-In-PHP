<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=students">Students</a></li>
                        <li class="breadcrumb-item active">Add Students</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="function.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                </div>
                                <input name="id" type="hidden" class="form-control">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input name="std_f_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="std_l_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Class</label>
                                            <select name="std_class" class="form-control std_class">
                                                <option value="">Select Class</option>
                                                <?php
                                                $std = "SELECT * from class_data";
                                                $result = mysqli_query($conn, $std);

                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                        $std_uid=$row["add_class"];
                                                        ?><option value="<?php echo $row["id"]; ?>" data-class_fee="<?php echo $row['add_class_fees'];?>"><?php echo $std_uid; ?></option><?php
                                                    }
                                                } else {
                                                    echo "Please Try Again";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Fee</label>
                                        <input name="std_fee" value="" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Fee Discount</label>
                                        <input name="std_fee_discount" value="" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Id</label>
                                        <input name="std_id" value="<?php echo 'BUI'.'-'.rand(100,999); ?>" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Admission Number</label>
                                        <input name="std_admission_number" value="<?php echo 'BUI'.'-'.rand(0,99); ?>" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="std_gender" class="form-control">
                                            <option value="" >Select Gender</option>
                                            <option value="Female" >Female</option>
                                            <option value="Male" >Male</option>
                                            <option value="Others" >Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div>
                                            <input name="std_dob" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Joining Date</label>
                                        <div>
                                            <input name="std_joining_date" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <select name="std_religion" class="form-control">
                                            <option value="" >Select Religion</option>
                                            <option value="Muslim" >Muslim</option>
                                            <option value="Non-Muslim" >Non-Muslim</option>
                                            <option value="Christian" >Christian</option>
                                            <option value="Hindu" >Hindu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Image</label>
                                        <input name="student_img" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5 class="form-title"><span>Parent Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <input name="std_father_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Occupation</label>
                                        <input name="std_father_occupation" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Mobile</label>
                                        <input name="std_father_mobile" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father CNIC</label>
                                        <input name="std_father_cnic" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Email</label>
                                        <input name="std_father_email" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Name</label>
                                        <input name="std_mother_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Occupation</label>
                                        <input name="std_mother_occupation" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Mobile</label>
                                        <input name="std_mother_mobile_number" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Email</label>
                                        <input name="std_mother_email" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Present Address</label>
                                        <textarea name="std_present_address" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Permanent Address</label>
                                        <textarea name="std_permanent_address" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_student" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>