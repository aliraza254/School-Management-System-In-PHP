<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Class List</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Class</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                        <button onclick="exportTbToCSVformat('export_details.csv')" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="./?page=add-class" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <div class="card-body">
                                        <?php
                                        include('config.php');
                                        if(isset($_GET['id'])){
                                            $class_id = mysqli_real_escape_string($conn, $_GET['id']);
                                            $query = "SELECT * FROM class_data WHERE id='$class_id' ";
                                            $query_run = mysqli_query($conn, $query);

                                            if(mysqli_num_rows($query_run) > 0){
                                                $class = mysqli_fetch_array($query_run);
                                                ?>
                                                <form action="function.php" method="POST">
<!--                                                    <input type="hidden" name="id" value="--><?//= $class['id']; ?><!--">-->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="form-title"><span>Subject Information</span></h5>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Edit Class</label>
                                                                <input type="text" class="form-control" name="add_class" value="<?= $class['add_class']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Edit Class</label>
                                                                <input type="text" class="form-control" name="add_class_section" value="<?= $class['add_class_section']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Edit Class Fee</label>
                                                                <input type="text" class="form-control" name="add_class_fees" value="<?= $class['add_class_fees']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"  name="update_class"  class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
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