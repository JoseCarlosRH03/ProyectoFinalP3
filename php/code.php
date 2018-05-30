<?php

echo  json_encode(sha1( $_POST['cedula'] . date("Y-m-d h:i:sa")));
?>