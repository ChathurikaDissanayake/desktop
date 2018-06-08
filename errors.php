
<?php
include 'db_server.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

?>
