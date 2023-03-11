<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Expenses</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Expenses</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                        <button onclick="exportTbToCSVformat('export_details.csv')" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="./?page=add-expenses" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Item Name</th>
                                        <th>Item Quality</th>
                                        <th>Amount</th>
                                        <th>Purchase Source</th>
                                        <th>Purchase Date</th>
                                        <th>Purchase By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    include('config.php');
                                    $query = "SELECT * FROM expenses_data";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $expenses)
                                        {
                                ?>
                                    <tr>
                                        <td><?= $expenses['expenses_id']; ?></td>
                                        <td>
                                            <h2>
                                                <a><?= $expenses['expenses_item_name']; ?></a>
                                            </h2>
                                        </td>
                                        <td><?= $expenses['expenses_item_quality']; ?></td>
                                        <td><?= $expenses['expense_amout']; ?></td>
                                        <td><?= $expenses['expenses_sop']; ?></td>
                                        <td><?= $expenses['expenses_date']; ?></td>
                                        <td><?= $expenses['expenses_by']; ?></td>
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