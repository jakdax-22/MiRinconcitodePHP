<?php

include 'function.php';
$field = array("preguntas" => $_POST['preguntas'], "respuestas" => $_POST['respuestas']);
$tbl = "preguntasrespuestas";
insert($tbl, $field);
header("location:index.php");


