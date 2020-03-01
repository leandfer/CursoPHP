<?php

    $json = '[{"nome":"Leandro","idade":20},{"nome":"Ferreira","idade":25}]';

    $data = json_decode($json, true);

    var_dump($data);

?>