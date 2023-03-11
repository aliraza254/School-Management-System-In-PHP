<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                        <button onclick="exportTbToCSVformat('export_details.csv')" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="./?page=add-teacher" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Subject</th>
                                        <th>Entry Level</th>
                                        <th>Mobile Number</th>
                                        <th>Address</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    include('config.php');
                                    $query = "SELECT * FROM teacher_data";
                                    $query_run = mysqli_query($conn, $query);
                                    $i = 1;
                                    if(mysqli_num_rows($query_run) > 0){
                                        foreach($query_run as $teacher){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <!-- <a href="teacher-details.html" class="avatar avatar-sm mr-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a> -->
                                                <a href="teacher-details.html"><?= $teacher['teacher_name']; ?></a>
                                            </h2>
                                        </td>
                                        <td><?= $teacher['t_dob']; ?></td>
                                        <td><?= $teacher['t_gender']; ?></td>
                                        <td><?= $teacher['t_qualification']; ?></td>
                                        <td><?= $teacher['t_experience']; ?></td>
                                        <td><?= $teacher['t_mobile']; ?></td>
                                        <td><?= $teacher['t_city']; ?></td>
                                        <td class="text-right">
                                            <div class="actions d-flex justify-content-end">
                                                <a href="./?page=edit-teacher&id=<?= $teacher['id']; ?>" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form action="function.php" method="POST">
                                                    <button type="submit" name="delete_teacher" value="<?=$teacher['id'];?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
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