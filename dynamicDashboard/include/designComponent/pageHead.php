<div class="row py-3 justify-content-between">
    <div class="col-12">
        <h4 class="text-center ">Welcome To Our Dashboard </h4>
    </div>
    <div class="col-3 ">
        <form method="POST" action="../back/selectDatabase.php" class="row justify-content-end">
            <div class="col-9">
                <select class="form-control" name="database" id="" placeholder='wlaa'>
                    <option value="">Select Database -----</option>
                    <?php
                    for ($i = 0; $i < count($database); $i++) { ?>
                        <option value="<?php echo  $database[$i][0] ?>"><?php echo  $database[$i][0] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" name="selectDatabase" class="col-3 form-control btn btn-primary">Go</button>
        </form>
    </div>
    <div class="col-2">
        <form method="POST" action="../back/logout.php">
            <button name="logout" class="btn btn-dark float-right">
                Logout From Server
            </button>
            <div class="clearfix"></div>
        </form>

    </div>
</div>

