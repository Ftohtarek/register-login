<!-- <div > -->
<tbody>
    <?php for ($i = 0; $i < count($tableRecords); $i++) { ?>
        <tr>
            <?php for ($j = 0; $j < count($tableRecords[$i]); $j++) { ?>
                <td class="TCell"> <?php echo $tableRecords[$i][$j] ?></td>
            <?php } ?>
            <td class="d-flex justify-content-around">
                <button class='btn btn-outline-warning ' onclick="updata('key<?php echo $i ?>')">upd</button>
                <a href="../back/delete.php?key=<?php echo $tableRecords[$i][0] ?> & $tableName=<?php echo $tableName ?>" class='btn btn-outline-danger'>delete</a>
            </td>
        </tr>

</tbody>
<?php } ?>
<style>
    .TCell {
        border-right: 1px solid rgba(0, 0, 0, .1);
    }
</style>