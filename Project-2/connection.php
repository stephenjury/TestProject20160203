<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba5da06c642e24');
define('DB_PASSWORD', 'ae90ab25');
define('DB_DATABASE', 'PhotoComment');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($db->connect_errno) {
    echo "Failed to connect to MySQL:(" . $db->connect_error. ")". $db->connect_error;
}

?>
