<?php
if (preg_match('/\.(?:php|phtml)$/', $_SERVER["REQUEST_URI"])) {
    require('./' . $_SERVER["REQUEST_URI"]);
    return;
}
return false;