
<?php
include 'include/header.php';
include 'back/dbconn.php';
include 'doc/function.php';
?>
<div class="container">
    <h2 class="text-center bg-dark text-white">User</h2>
    <div id="table" class="">
        <div class="form-group w-25 ml-auto">
            <input id="search" type="text" placeholder="Search" class="form-control">
        </div>
        <?php include 'include/addUser.php'?>

        <div id="tableBody">
            <?php
            $user = new dbOperator('ecommerce', 'user');
            $userRecords = $user->fetchAll();
            for ($i = 0; $i < count($userRecords); $i++) {
            ?>
                <div class="row">
                    <div class="col-1 "><?php echo $userRecords[$i]['id'] ?></div>
                    <div class="col-2 "><?php echo $userRecords[$i]['name'] ?></div>
                    <div class="col-2 "><?php echo $userRecords[$i]['email'] ?> </div>
                    <div class="col-2"><?php echo $userRecords[$i]['password'] ?></div>
                    <div class="col-2"><?php echo $userRecords[$i]['country'] ?></div>
                    <div class="col-1"><?php echo $userRecords[$i]['gender'] ?></div>
                    <div class="col-1"><?php echo $userRecords[$i]['banding'] ?></div>
                    <div class="col-1 d-flex justify-content-around">
                        <button class='btn btn-outline-warning' onclick="updata('key<?php echo $i ?>')">upd</button>
                        <a href="back/delete.php?key=<?php echo $userRecords[$i]['id'] ?>" class='btn btn-outline-danger'>del</a>
                    </div>
                </div>

                <div class="row updRow" id="key<?php echo $i ?>">
                    <div class="col-md-1"></div>
                    <div class="col-md-2 d-flex">
                        <label class="updatelabel d-md-none">Name</label>
                        <input type="text" name="name" class="w-100 updatefield" value="<?php echo $userRecords[$i]['name'] ?>">
                    </div>
                    <div class="col-md-2 d-flex">
                        <label class="updatelabel d-md-none">Email</label>
                        <input type="text" name="email" class="w-100 updatefield" value="<?php echo $userRecords[$i]['email'] ?>">
                    </div>
                    <div class="col-md-2 d-flex">
                        <label class="updatelabel d-md-none">Password</label>
                        <input type="text" name="password" class="w-100 updatefield" value="<?php echo $userRecords[$i]['password'] ?>">
                    </div>
                    <div class="col-md-2 d-flex">
                        <label class="updatelabel d-md-none">Country</label>
                        <input type="text" name="country" class="w-100 updatefield" value="<?php echo $userRecords[$i]['country'] ?>">
                    </div>
                    <div class="col-md-1 d-flex">
                        <label class="updatelabel d-md-none">Gender</label>
                        <input type="text" name="gender" class="w-100 updatefield" value="<?php echo $userRecords[$i]['gender'] ?>">
                    </div>
                    <div class="col-md-1 d-flex">
                        <label class="updatelabel d-md-none">Banding</label>
                        <input type="text" name="banding" class="w-100 updatefield" value="<?php echo $userRecords[$i]['banding'] ?>">
                    </div>
                    <div class="col-md-1 d-flex  justify-content-around px-0">
                        <button id="save" type="button" class="savebtn">Save</button>
                        <button id="cansal" type="button" class="cansalbtn" onclick="cansal('key<?php echo $i ?>')">Cansal</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script>
        function updata(key) {
            let rowKey = document.getElementById(key).style.display = 'flex';
        }

        function cansal(key) {
            document.getElementById(key).style.display = 'none';
        }
    </script>
    <?php
    // $db = new dbOperator('ecommerce', 'user');
    // // echo $db->count();
    // // printArr($db->search(1));
    // printArr($db->delete(46));
    // $records = ['ftoh', 'ahmed@gmail.com', 7706000000000, 'egypt', 1];
    // // $db->addRecord(['name','email','password','country','gender'],$records);
    // // $db->updata(16,['name','email','password'],['ftoh','ftohothman','098529882354'])
    // 
    ?>

</div>
<script src="js/dashboardjs.php"></script>
<?php
include 'include/footer.php';
?>