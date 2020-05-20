<?php
    require "db.php";
?>

<?php if( isset($_SESSION['logged_user'])) : ?>
    <?php echo $_SESSION['logged_user']->name; ?> <span> </span><?php echo $_SESSION['logged_user']->surname; ?>
    <a href="logout.php">Выход</a>
<?php else : ?>
<?php endif; ?>