<?php
require_once('../config/koneksi.php');
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id ASC")){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $myArray[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($myArray);
}
?>
