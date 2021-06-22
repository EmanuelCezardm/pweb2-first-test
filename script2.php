<?php
    session_start();
    echo "Nome: " . $_SESSION['name'] . "<br>";
    echo "Telefone: " . $_SESSION['number'];
?>