<?php
include "include/head.php"
?>
<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-7 shadow-sm py-5 bg-dark text-center px-4 ">
            <h3 class="text-white pb-3"> Validation Form</h3>
            <form action="back/form.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="password" placeholder="Enter password">
                </div>
                <button type="submit" name="submit" class="btn btn-outline-light">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include "include/footer.php"
?>