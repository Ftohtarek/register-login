<?php ob_start()?>
<?php include '../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in About Section </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php include '../shardFile/error.php' ?>
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <form class="row" action="../back/aboutController.php" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required minlength="3" type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jop">Jop</label>
                        <input required minlength="3" type="text" class="form-control" id="jop" name="jop" placeholder="Jop">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input minlength="10" required type="text" class="form-control" name="desc" id="description" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input minlength="1" required type="text" class="form-control" name="age" id="age" placeholder="Age">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input minlength="3" required type="text" class="form-control" name="gender" id="gender" placeholder="Gender">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="from">From</label>
                        <input minlength="3" required type="text" class="form-control" name="from" id="from" placeholder="From">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="live_in">Live In</label>
                        <input minlength="3" required type="text" class="form-control" name="liveIn" id="live_in" placeholder="Live In">
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
                <div class="col-md-12 my-4">
                    <button name="addRecord" class="btn btn-info w-25 float-right">Add Record</button>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include '../shardFile/footer.php' ?>