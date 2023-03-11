<?php include 'function.php'; ?>


<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                <h3 class="page-title">Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-one w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="db-info">
                            <h3><?php echo sprintf("%'.03d\n", $std_count) ?></h3>
                            <h6>Students</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-two w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="db-info">
                            <h3><?php echo sprintf("%'.03d\n", $teacher_count); ?></h3>
                            <h6>Teachers</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-three w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="db-info">
                            <h3><?php echo sprintf("%'.03d\n", $sum_expence[0]) ?></h3>
                            <h6>Expense</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-four w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="db-info">
                            <h3><?php echo sprintf("%'.03d\n", $sum_revenue[0]) ?></h3>
                            <h6>Revenue</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="card card-chart">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">Revenue</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                            <li class="list-inline-item">
                                <div class="form-group mb-0 amount-spent-select">
                                    <select class="form-control form-control-sm">
                                        <option>Today</option>
                                        <option>Last Week</option>
                                        <option>Last Month</option>
                                    </select>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apexcharts-area"></div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card card-chart">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">Number of Students</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                            <li class="list-inline-item">
                                <div class="form-group mb-0 amount-spent-select">
                                    <select class="form-control form-control-sm">
                                        <option>Today</option>
                                        <option>Last Week</option>
                                        <option>Last Month</option>
                                    </select>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bar"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright © 2022 Web Tech Softs.</p>
    </footer>
</div>