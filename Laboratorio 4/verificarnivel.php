<?php
if ($_SESSION["nivel"]==0)
{
    echo "usted no esta autorizado a realizar esta operación";
    ?>
    <meta http-equiv="refresh" content="2;url=principal.php">
    <?php
    die();
}
?>