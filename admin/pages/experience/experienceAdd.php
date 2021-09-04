<?php include '../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in Experinece Section </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <form class="row" action="" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input required type="text" class="form-control" id="year" name="year" placeholder="Enter Year">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input required type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="university">University</label>
                        <input required type="text" class="form-control" name="university" id="university" placeholder="University">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input required type="text" class="form-control" name="description" id="description" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <button name="addRecord" class="btn btn-info w-25 float-right">Add Record</button>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include '../shardFile/footer.php' ?>