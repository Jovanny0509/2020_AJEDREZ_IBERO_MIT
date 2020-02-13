<?php
/******************************************
@author: IBERO-MIT-PILARES
@desc: Módulo de CIERRE de sesión
******************************************/
session_destroy();
header("Location: index.php");
exit();
?>