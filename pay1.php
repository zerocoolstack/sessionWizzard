<?php
session_start();
$payment = 'Completed';
if($payment === 'Completed'){
    session_destroy();
}
?>