<?php

session_start();

$conn = mysqli_connect(
    '127.0.0.1:3306', //modifica
    'salo',
    '0108',
    'registroNotas'
) or die(mysqli_erro($mysqli));
?>
