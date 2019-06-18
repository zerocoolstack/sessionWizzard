<?php
    session_start();
    $step =  isset($_GET['step']) ?  $_GET['step'] : 1;
    $_SESSION['datos_form'] = $_POST;

    include 'validate.php';

    header('Content-Type: application/json');

    $json =  array(
        'radio'     => $radio,
        'step'      => $step,
        'get' => $_SESSION
    );

    echo json_encode($json);
    
?>