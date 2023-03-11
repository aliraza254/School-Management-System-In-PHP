<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Expenses</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="expenses.html">Accounts</a></li>
                        <li class="breadcrumb-item active">Add Expenses</li>
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
                                    <h5 class="form-title"><span>Expense Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Expenses ID</label>
                                        <input type="text" name="expenses_id" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Item Name</label>
                                        <input type="text" name="expenses_item_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Item Quality</label>
                                        <input type="text" name="expenses_item_quality" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Expense Amount</label>
                                        <input type="text" name="expense_amout" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Source of Purchase</label>
                                        <input type="text" name="expenses_sop" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Purchase Date</label>
                                        <input type="date" name="expenses_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Purchase By</label>
                                        <input type="text" name="expenses_by" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit"  name="save_expenses" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>