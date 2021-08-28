<!-- <div  class="row"> -->
<thead  class ='thead-dark'> 
    <tr>
        <?php
        for ($i = 0; $i < count($tableColumns); $i++) {
        ?>
            <th class=""><?php echo $tableColumns[$i] ?></th>
        <?php } ?>
        <th class="">Operator</th>
    </tr>
</thead>
