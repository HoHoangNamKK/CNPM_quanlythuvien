

<?php
include('dbcon.php');



mysqli_query($conn,"delete from book where status like 'Archive'");

header('location:archive.php');
?>