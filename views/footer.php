<div class="row">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="register.php"><h4>Not a member? Join now!</h4></a>
    </div>
</div>
<div class="row">
    <?php
    // show potential errors / feedback (from login object)
    if (isset($login)) {
        if ($login->errors) {
            foreach ($login->errors as $error) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php }
        }
        ?>
        <?php
        if ($login->messages) {
            foreach ($login->messages as $message) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message; ?>
            </div>
            <?php }
        }
    }
    if (isset($registration)) {
        if ($registration->errors) {
            foreach ($registration->errors as $error) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php }
        }
        if ($registration->messages) {
            foreach ($registration->messages as $message) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                    echo $message; 
                    echo "<script>$(document).ready(
                        function(){setTimeout(
                            function(){
                            $('#index_link')[0].click();
                        }, 4000)});</script>";
                    ?>
                </div>
            <?php
            }
        }
    }?>
</div>