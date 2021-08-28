<div class="container my-2">
    <div class="text-danger text-center">
        <?php
        if ( isset($_SESSION['error']) )
        {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
    </div>
</div>