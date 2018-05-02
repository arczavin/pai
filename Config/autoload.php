<?php

set_include_path(
    get_include_path()
    .PATH_SEPARATOR."./Entity/"
);

function __autoload($class_name) {
    echo 'Ładuję klase '.$class_name. "<br><br>";
    require_once $class_name . '.php';
}

?>
