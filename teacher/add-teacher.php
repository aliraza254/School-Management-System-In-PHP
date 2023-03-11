<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=teachers">Teachers</a></li>
                        <li class="breadcrumb-item active">Add Teachers</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="function.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>
                               
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="teacher_name" type="text" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="t_gender" class="form-control">
                                            <option  value="male">Male</option>
                                            <option  value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input name="t_dob" type="date" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input name="t_mobile" type="number" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Joining Date</label>
                                        <input name="t_joining_date" type="date" class="form-control"required>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input name="t_qualification" class="form-control" type="text"required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input name="t_experience" class="form-control" type="text"required>
                                    </div>
                                </div>
                            
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input name="t_salary" type="number" class="form-control"required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h5 class="form-title"><span>Address</span></h5>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="t_address" type="text" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input name="t_city" type="text" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input name="t_state" type="text" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input name="t_zipcode" type="number" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input name="t_country" type="text" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_teacher" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>