<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Classes</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?page=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Class</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a>
                    <a href="./?page=add-class" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Class Fee</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                include('config.php');
                                $query = "SELECT * FROM class_data";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $class){
                                        ?>
                                        <tr>
                                            <td><?php echo $class['add_class'];?></td>
                                            <td><?php echo $class['add_class_section'];?></td>
                                            <td><?php echo $class['add_class_fees'];?></td>
                                            <td class="text-right">
                                                <div class="actions d-flex justify-content-end">
                                                    <a href="./?page=edit-class&id=<?php echo $class['id'];?>" class="btn btn-sm bg-success-light mr-2">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="function.php" method="POST">
                                                        <button type="submit" name="delete_class" value="<?=$class['id'];?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
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