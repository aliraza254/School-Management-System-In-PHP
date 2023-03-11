<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Salary</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Salary</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                        <button onclick="exportTbToCSVformat('export_details.csv')" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="./?page=add-salary" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Salary</th>
                                        <th>Paid Date</th>
                                        <th>Reduction Type</th>
                                        <th>Fine</th>
                                        <th>Advance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    include('config.php');
                                    $query = "SELECT * FROM salary_data";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0){
                                        $i = 1;
                                        foreach($query_run as $salary){
                                            $query = "SELECT teacher_name FROM teacher_data WHERE id = ".$salary['teacher_name'];
                                            $query_run = mysqli_query($conn, $query);
                                            foreach ($query_run as $single){
                                                $teacher_name = $single['teacher_name'];
                                            }
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <!-- <a class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle"
                                                        src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a> -->
                                                <a><?php echo $teacher_name; ?></a>
                                            </h2>
                                        </td>
                                        <td><?= $salary['t_salary']; ?></td>
                                        <td><?= $salary['paid_date']; ?></td>
                                        <td><?= $salary['reduction_type']; ?></td>
                                        <td><?= $salary['teacher_fine']; ?></td>
                                        <td><?= $salary['teacher_advance']; ?></td>



                                    </tr>
                                    <?php
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










<!---->
<?php //if($salary['t_salary'] === ''){ ?>
<!--    <td class="text-right">-->
<!--        <span class="badge badge-danger">Un Paid</span>-->
<!--    </td>-->
<!--    --><?php
//}else{
//    ?>
<!--    <td class="text-right">-->
<!--        <span class="badge badge-success ">Paid</span>-->
<!--    </td>-->
<!--    --><?php
//}?>
