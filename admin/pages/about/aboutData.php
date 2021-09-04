<?php include '../shardFile/header.php' ?>
<?php include '../back/getter.php'?>
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
    <?php
    // getter::
    ?>
    <div class="card-body overflow-auto">
        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Jop</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>From</th>
                    <th>Live In</th>
                    <th>Image</th>
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
                    <td>Gender</td>
                    <td>Cario</td>
                    <td>minya Elkamh</td>
                    <td class="limit-25">https://www.google.com https://www.google.com</td>
                    <td class="limit-25">
                        https://www.google.com https://www.google.com kjfkldjdaslfkjlksdfjklasjfdlkjdaklfj;aldskfjsalkdjflkadsjflkasdjfkjasdflkj;jafkjfkjaflkjlfjaddkfj
                    </td>
                    <td>
                        <button name="updata" class="btn btn-warning w-100 my-1">upd</button>
                        <button name="delete" class="btn btn-danger w-100">del</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ftoh tarek othman </td>
                    <td>Full Stack Developer</td>
                    <td>24 </td>
                    <td>Gender</td>
                    <td>Cario</td>
                    <td>minya Elkamh</td>
                    <td class="limit-25">https://www.google.com https://www.google.com</td>
                    <td class="limit-25">
                        https://www.google.com https://www.google.com kjfkldjdaslfkjlksdfjklasjfdlkjdaklfj;aldskfjsalkdjflkadsjflkasdjfkjasdflkj;jafkjfkjaflkjlfjaddkfj
                    </td>
                    <td>
                        <button name="updata" class="btn btn-warning w-100 my-1">upd</button>
                        <button name="delete" class="btn btn-danger w-100">del</button>
                    </td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                 <th>ID</th>
                    <th>Name</th>
                    <th>Jop</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>From</th>
                    <th>Live In</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </tfoot>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php include '../shardFile/footer.php' ?>