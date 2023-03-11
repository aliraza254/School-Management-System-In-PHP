<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Fees Collections</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Fees Collections</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                        <button onclick="exportTbToCSVformat('export_details.csv')" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="./?page=add-fees-collection" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Fees Type</th>
                                        <th>Fees Amount</th>
                                        <th>Paid Amount</th>
                                        <th>Paid Date</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    include('config.php');
                                    $query = "SELECT * FROM fees_data";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0){
                                        $i = 1;
                                        foreach($query_run as $fees){
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <!-- <a class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle"
                                                        src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a> -->
                                                <a><?= $fees['fee_type']; ?></a>
                                            </h2>
                                        </td>
                                        <td><?= $fees['fees_amount']; ?></td>
                                        <td><?= $fees['fees_amount_paid']; ?></td>
                                        <td><?= $fees['fee_paid_date']; ?></td>
                                        <td class="text-right">
                                            <div class="actions d-flex justify-content-end">
                                                <form action="function.php" method="POST">
                                                    <button type="submit" name="delete_fees" value="<?=$fees['id'];?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>

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




<?php //if($fees['fee_type'] === ''){ ?>
<!--    <td class="text-right">-->
<!--        <span class="badge badge-danger">Un Paid</span>-->
<!--    </td>-->
<!--    --><?php
//}else{
//    ?>
<!---->
<!--    <td class="text-right">-->
<!--        <span class="badge badge-success ">Paid</span>-->
<!--    </td>-->
<!--    --><?php
//}?>
