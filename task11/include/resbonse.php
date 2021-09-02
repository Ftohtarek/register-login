<style>
    .error {
        color: red;
        font-size: 18px;
        border: 2px solid red;
        margin: auto;
        padding: 10px ;
    }
    .sucuss {
        color: lime;
        font-size: 18px;
        border: 2px solid lime;
        margin: auto;
        padding: 10px ;
    }
    
</style>
<?php
session_start();
if (isset($_SESSION['userError'])) { ?>
    <div class=" container error my-2">
        <?php foreach ($_SESSION['userError'] as $key => $value) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $value ?>
            </div>
        <?php
        }
        unset($_SESSION['userError']);
        ?>
    </div>
<?php } ?>
<?php
if (isset($_SESSION['sucuss'])) { ?>
    <div class=" container sucuss my-2">
        <?php foreach ($_SESSION['sucuss'] as $key => $value) { ?>
            <div class="" role="alert">
                <?php echo $value ?>
            </div>
        <?php
        }
        unset($_SESSION['sucuss']);
        ?>
    </div>
<?php } ?>