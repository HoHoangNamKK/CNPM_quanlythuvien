

<?php
include('dbcon.php');



mysqli_query($conn," delete from borrowdetails where borrow_status = 'Đã trả' and borrow_id NOT IN (select borrow_id from borrowdetails where borrow_status = 'Đang mượn')");
mysqli_query($conn,"delete from borrow where borrow_id NOT IN (select borrow_id from borrowdetails)");
header('location:return.php');
?>