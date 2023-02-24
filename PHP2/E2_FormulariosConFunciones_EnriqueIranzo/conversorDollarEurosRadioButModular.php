<?php
include './lib_EuroDollar.php';
if ($cant > 0) {
conv_EUtoUSD($cant);
conv_USDtoEu($cant);
visualiza($cant, $opc, $euros, $dolares);
}
elseif ($cant < 0){
error_negativo($cant); 
}
else {
error_vacio($cant);
}

