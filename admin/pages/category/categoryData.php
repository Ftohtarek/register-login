<?php include '../shardFile/header.php' ?>
<style>
    .limit-25 {
        max-width: 250px;
    }
</style>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">About DataTable </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>ftoh tarek othman </td>
                    <td class="d-flex">
                        <button name="updata" class="btn btn-warning w-50 mx-1">upd</button>
                        <button name="delete" class="btn btn-danger w-50 mx-1">del</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ftoh tarek othman </td>
                    <td class="d-flex">
                        <button name="updata" class="btn btn-warning w-50 mx-1">upd</button>
                        <button name="delete" class="btn btn-danger w-50 mx-1">del</button>
                    </td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                </tr>
            </tfoot>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php include '../shardFile/footer.php' ?>