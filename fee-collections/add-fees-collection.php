<?php include('config.php');?>
<?php include('function.php');?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Fees</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=fees-collections">Accounts</a></li>
                        <li class="breadcrumb-item active">Add Fees</li>
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
                                    <h5 class="form-title"><span>Fees Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Class</label>
                                        <select name="fees_class" class="form-control select_class">
                                            <option>Please Select Student Class</option>
                                            <?php
                                            $std = "SELECT * from class_data";
                                            $result = mysqli_query($conn, $std);

                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    ?>
                                                    <option value="<?php echo $row["id"]; ?>" data-class_fee="<?php echo $row['add_class_fees'];?>" data-class_name="<?php echo $row['add_class'];?>"><?php echo $row["add_class"];; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student List</label>
                                        <select name="fees_std" class="form-control select_student">
                                            <option>Please Select Student</option>
                                            <?php
                                            $std = "SELECT * from std_data";
                                            $result = mysqli_query($conn, $std);

                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    $name=$row["std_f_name"].' '.$row["std_l_name"];
                                                    $class = "SELECT add_class FROM class_data WHERE id = ".$row['std_class'];
                                                    $class = mysqli_query($conn, $class);
                                                    foreach ($class as $single){
                                                        $std_class = $single['add_class'];
                                                    }
                                                    ?><option value="<?php echo $row['id']; ?>" data-std_fee_discount="<?php echo $row['std_fee_discount'];?>" style="display:none;" class="student_list <?php echo $std_class; ?>"><?php echo $name; ?></option><?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fees Type</label>
                                        <select name="fee_type" class="form-control">
                                            <option value="">Select Fees Type</option>
                                            <option value="class">Class</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Total Fee Amount</label>
                                        <input type="number" name="fees_amount" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fees Paid Amount</label>
                                        <input type="number" name="fees_amount_paid" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Paid Date</label>
                                        <input type="date" name="fee_paid_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_fees" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>