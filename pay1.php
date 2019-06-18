<?php
session_start();
$payment = 'Completed';
if($payment === 'Completed'){
    $_SESSION['datos_form']['__step__'] = 1;
    $_SESSION['datos_form']['radio'] = 1;
}
?>
