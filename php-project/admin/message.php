<?php if(isset($_SESSION["success"])) { ?>
 <div class="alert alert-success">
     <?php echo $_SESSION["success"]; ?>
     <?php unset($_SESSION["success"]); ?>
    </div>
<?php } ?>

<?php if(isset($_SESSION["error"])) { ?>
 <div class="alert alert-danger">
     <?php echo $_SESSION["error"]; ?>
     <?php unset($_SESSION["error"]); ?>
    </div>
<?php } ?>




