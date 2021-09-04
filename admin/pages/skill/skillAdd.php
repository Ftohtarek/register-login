<?php include '../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in Skill Section </h1>
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
                        <label for="name">Name</label>
                        <input required type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="percentage">percentage</label>
                        <input required type="text" class="form-control" id="percentage" name="percentage" placeholder="percentage">
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