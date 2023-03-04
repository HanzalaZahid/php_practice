<?php
function abort($error_code= 404){
    http_response_code($error_code);
    require('views/'.$error_code.'.view.php');
}
?>