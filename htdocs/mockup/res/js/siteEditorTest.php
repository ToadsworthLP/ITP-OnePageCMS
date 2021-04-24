<?php

$list = isset($_POST['list']) ? $_POST['list'] : null;

if($list != null) {
    $output = "";
    parse_str($list, $output);

    var_dump($output);
}
