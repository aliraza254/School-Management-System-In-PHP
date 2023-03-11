<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Salary</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=salary">Accounts</a></li>
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
                                        <label>Teachers</label>
                                        <!-- <input type="text" name="staff_salary_id" class="form-control"> -->
                                        <select name="teacher_name" class="form-control select_teacher">
                                            <option>Select Teacher</option>
                                            <?php $sql = 'SELECT * FROM teacher_data';
                                            $query_run = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_assoc ($query_run) ) {
                                                $teacher_name= $row['teacher_name'];?>
                                                <option value="<?php  echo $row['id']; ?>" data-teacher_salary="<?php echo $row['t_salary'];?>" ><?php  echo $teacher_name ?></option><?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input name="t_salary" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Paid Date</label>
                                        <input type="date" name="paid_date" class="form-control">
                                    </div>
                                </div>

<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Month</label>-->
<!--                                        <input type="month" class="form-control" name="month">-->
<!--                                     </div>-->
<!--                                </div>-->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Paid Amount</label>
                                        <input type="number" name="teacher_paid_amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 ">
                                    <div class="form-group">
                                        <label>Reduction Type</label>
                                        <select name="reduction_type" class="form-control" id="select_reduction_type">
                                            <option value="" > Select Type</option>
                                            <option value="Fine" > Fine</option>
                                            <option value="Advance" >Advance</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 hide_fine" id="show_fine">
                                    <div class="form-group">
                                        <label>Fine</label>
                                        <input type="number" name="teacher_fine" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 hide_advance" id="show_advance">
                                    <div class="form-group">
                                        <label>Advance</label>
                                        <input type="number" name="teacher_advance" class="form-control">
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