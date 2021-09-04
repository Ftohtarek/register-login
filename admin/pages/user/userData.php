<?php include '../shardFile/header.php' ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Product DataTable </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>ali</td>
                    <td>ali</td>
                    <td>20</td>
                    <td class="d-flex border-0">
                        <button name="updata" class="btn btn-warning w-50 mx-1">upd</button>
                        <button name="delete" class="btn btn-danger w-50 mx-1">del</button>
                    </td>

                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th></th>
                </tr>
            </tfoot>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php include '../shardFile/footer.php' ?>