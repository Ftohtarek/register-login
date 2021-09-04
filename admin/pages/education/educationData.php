<?php include '../shardFile/header.php' ?>
<style>
    .limit-30 {
        max-width: 300px;
    }
</style>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Education DataTable </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Title</th>
                    <th>University</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>ftoh tarek othman </td>
                    <td>Full Stack Developer</td>
                    <td>24 </td>
                    <td class="limit-30">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut odio quae illum ipsa? Quaerat omnis eaque voluptas cumque vitae distinctio. </td>
                    <td class="d-flex border-0">
                        <button name="updata" class="btn btn-warning w-50 mx-1">upd</button>
                        <button name="delete" class="btn btn-danger w-50 mx-1">del</button>
                    </td>
                </tr>

            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Title</th>
                    <th>University</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </tfoot>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php include '../shardFile/footer.php' ?>