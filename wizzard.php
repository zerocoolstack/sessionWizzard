<?php
    session_start();
    if (isset($_GET['p'])) {
        session_destroy();
        session_start();
    }

    include  'validate.php';

    $r =array(
        1 => 'Transferenasdascia Bancaria',
        2 => 'PayPal',
        3 => 'Tarjeta de credito',
    );

    include 'index.phtml';

    var_dump($_SESSION)
?>