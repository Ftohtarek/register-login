<div class='container-fluid'>
    <h5>Add New Record</h5>

    <form method="post" action="../back/addRecord.php" class="row recordBox">
        <?php
        $_SESSION['addCoulmn'] = [];
        for ($i = 1; $i < count($tableColumns); $i++) {

            array_push($_SESSION['addCoulmn'], $tableColumns[$i]);
            $status = $db->getCoulmnDefault($tableColumns[$i])['COLUMN_DEFAULT'];

            if ($status == 'NULL' || $status != null) { ?>
                <input type="text" name="<?php echo $tableColumns[$i] ?>" class="addCell" placeholder=" <?php echo $tableColumns[$i] ?>">

            <?php } else { ?>
                <input required type="text" name="<?php echo $tableColumns[$i] ?>" class="addCell" placeholder=" <?php echo $tableColumns[$i] ?>">
        <?php }
        } ?>
        <button type="submit" class="addBtn " name="add">Add</button>
    </form>

</div>

<style>
    .addCell {
        border: 1px solid rgba(0, 0, 0, .1);
        margin-bottom: 5px;
    }

    .addBtn {
        width: 100px;
        margin-bottom: 5px;

    }

    .recordBox {
        border: 1px solid lightgray;
        margin-bottom: 10px;
        padding: 10px 20px;
        border-radius: 5px;
    }
</style>