<?php
session_start();
if (isset($_SESSION['userError'])) { ?>
    <div class="container my-2">
        <?php foreach ($_SESSION['userError'] as $key => $value) { ?>
            <div class="alert alert-default-danger" role="alert">
                <?php echo $value ?>
            </div>
        <?php
        }
        unset($_SESSION['userError']);
        ?>
    </div>
<?php } ?>