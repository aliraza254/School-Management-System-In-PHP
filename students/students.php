<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Students</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <button onclick="exportTbToCSVformat('export_details.csv')" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="./?page=add-student" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable" border="1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>DOB</th>
                                        <th>Father Name</th>
                                        <th>Father CNIC</th>
                                        <th>Address</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    include('config.php');
                                    $ali = "SELECT * FROM std_data";
                                    $query_run = mysqli_query($conn, $ali);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student){
                                            $class = "SELECT add_class FROM class_data WHERE id = ".$student['std_class'];
                                            $class = mysqli_query($conn, $class);
                                            foreach ($class as $single){
                                                $std_class = $single['add_class'];
                                            }
                                            ?>
                                            <tr>
                                                <td><?= $student['std_id']; ?></td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <!-- <a href="student-details..php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle"
                                                                src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a> -->
                                                        <a href="student-details.php"><?= $student['std_f_name']; ?></a>
                                                    </h2>
                                                </td>
                                                <td><?= $std_class; ?></td>
                                                <td><?= $student['std_dob']; ?></td>
                                                <td><?= $student['std_father_name']; ?></td>
                                                <td><?= $student['std_father_cnic']; ?></td>
                                                <td><?= $student['std_permanent_address']; ?></td>
                                                <td class="text-right">
                                                    <div class="actions d-flex justify-content-end">
                                                        <a href="./?page=edit-student&id=<?= $student['id']; ?>" class="btn btn-sm bg-success-light mr-2">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        
                                                        <form action="function.php" method="POST">
                                                            <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr><?php
                                        }
                                    }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright © 2022 Web Tech Softs.</p>
    </footer>
</div>

<?php include('csv-data.php'); ?>
