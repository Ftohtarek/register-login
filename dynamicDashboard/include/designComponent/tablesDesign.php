<div class="col-md-2 shadow-sm text-center">
    <h4 class='bg-dark p-1 my-2 text-white'>Tables</h4>
    <?php
    foreach ($tables as $val) { ?>
        <a href="dashboard.php?table=<?php echo $val ?>" class="tableCell my-2">
            <?php echo $val ?>
        </a>
    <?php } ?>
</div>
<style>
    .tableCell {
        background-color: rgba(0, 0, 0, .1);
        margin: auto;
        font-size: 18px;
        text-decoration: none !important;
        width: 90%;
        display: block;
        color: black;
    }
</style>