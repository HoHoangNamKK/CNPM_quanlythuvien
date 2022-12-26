

<?php
include('dbcon.php');



mysqli_query($conn,"delete from borrowdetails");

header('location:archive.php');
?>