<?php include '../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in Category Section </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <form class="row" action="" method="POST">
                <div class="col-md-9">
                    <div class="form-group">
                        <input required type="text" class="form-control" name="name" id="name" placeholder="Category Name">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <button name="addRecord" class="btn btn-info form-control">Add Record</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include '../shardFile/footer.php' ?>