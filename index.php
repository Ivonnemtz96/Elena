<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'active';
include('includes/head.php');
?>

<body data-bs-spy="scroll" data-bs-offset="120">
    <?
        include('includes/preloader.php');
    ?>
    <div  class="page-wrapper">
        <?php
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        ?>
    </div>
    <?
        include('includes/scripts.php');
    ?>
</body>

</html>