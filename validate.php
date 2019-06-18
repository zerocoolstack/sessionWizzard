<?php
    $datosForm = (isset($_SESSION['datos_form']) && is_array($_SESSION['datos_form'])) ? $_SESSION['datos_form'] :array();
    $sPaso = isset($datosForm['__step__']) ? $datosForm['__step__'] : 1;
    $step = isset($step) ? $step : $sPaso;
    $radio   = isset($datosForm['radio']) ? $datosForm['radio'] : 1;
    $_SESSION['datos_form']['__step__'] = $step;
?>