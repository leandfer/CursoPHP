<?php

    session_id('3f82d2c7ac50f1d218eb56cae1674c07');

    require_once("config.php");

    session_regenerate_id();

    echo session_id();
    echo "</br>";

    var_dump($_SESSION);

?>