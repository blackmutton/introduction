<?php
include "db.php";

$Contact->save($_POST);
$result = [
        "msg" => "ok"
    ];

    echo json_encode($result);