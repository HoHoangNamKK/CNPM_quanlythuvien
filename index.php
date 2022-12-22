<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
					<div class="span12">	
						<h1>Danh sách sách</h1>
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
										<th>No.</th>                                 
                                        <th>Tên sách</th>                                 
                                        <th>Thể loại</th>
										<th>Tác giả</th>
										<th class="action">Tái bản</th>
										<th>Nhà xuất bản</th>
										<th>Nơi xuất bản</th>
										<th>Mô tả</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
									$conn = mysqli_connect('localhost','root','','eb_lms');
								  	$user_query=mysqli_query($conn,"select * from book where status != 'Archive'");
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];
									$book_copies = $row['book_copies'];
									
									$borrow_details = mysqli_query($conn,"select * from borrowdetails where book_id = '$id' and borrow_status = 'Đang mượn'");
									$row11 = mysqli_fetch_array($borrow_details);
									$count = mysqli_num_rows($borrow_details);
									
									$total =  $book_copies  -  $count; 
											$cat_query = mysqli_query($conn,"select * from category where category_id = '$cat_id'");
											$cat_row = mysqli_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo $total;   ?> </td>
                                     <td><?php echo $row['book_pub']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['Describe']; ?></td>
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>	
			</div>
		</div>
    </div>
<?php include('footer.php') ?>