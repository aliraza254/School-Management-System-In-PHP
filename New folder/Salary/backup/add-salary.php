<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Salary</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="salary.html">Accounts</a></li>
                        <li class="breadcrumb-item active">Add Salary</li>
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
                                    <h5 class="form-title"><span>Salary Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Staff ID</label>
                                        <input type="text" name="staff_salary_id" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="staff_salary_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="staff_salary_gender" class="form-control" id="exampleFormControlSelect1">
                                            <option name="staff_salary_gender" value="" >Select Gender</option>
                                            <option name="staff_salary_gender" value="Female" >Female</option>
                                            <option name="staff_salary_gender" value="Male" >Male</option>
                                            <option name="staff_salary_gender" value="Other" >Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Joining Date</label>
                                        <input type="date" name="staff_salary_joining_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" name="staff_salary_amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_salary" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>