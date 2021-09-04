<?php include '../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in Product Section </h1>
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
                        <label for="title"> Title</label>
                        <input required type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input required type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input required type="file" name="img" class="custom-file-input" id="img">
                                <label class="custom-file-label" for="img">Choose img</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="catogeryId">Catogery Id</label>
                        <input required type="text" class="form-control" name="catogeryId" id="catogeryId" placeholder="Catogery Id">
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