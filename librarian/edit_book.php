<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($conn,"select * from book LEFT JOIN category on category.category_id  = book.category_id where book_id='$get_id'");
		$row=mysqli_fetch_array($query);
		$category_id = $row['category_id'];
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Sửa thông tin sách</div>
			<p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Quay lại</a></p>
	<div class="addstudent">
	<div class="details">Vui lòng nhập thông tin vào bên dưới</div>	
	<form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Tên sách:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="Tên sách" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Thể loại:</label>
			<div class="controls">
			<select name="category_id">
				<option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
				<?php $query1 = mysqli_query($conn,"select * from category where category_id != '$category_id'");
				while($row1 = mysqli_fetch_array($query1)){
				?>
				<option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tác giả:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="Tác giả" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tái bản:</label>
			<div class="controls">
			<input class="span1" type="text" id="inputPassword" name="book_copies" value="<?php echo $row['book_copies']; ?>" placeholder="Tái bản" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Mô tả:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="Describe" value="<?php echo $row['Describe']; ?>" placeholder="Mô tả" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nhà xuất bản:</label>
			<div class="controls">
			<input type="text" class="span4"  id="inputPassword" name="book_pub" value="<?php echo $row['book_pub']; ?>" placeholder="Nhà xuất bản" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nơi xuất bản:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="Nơi xuất bản" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Mã vạch:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="Mã vạch" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Năm bản quyền:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="Năm bản quyền" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Trạng thái:</label>
			<div class="controls">
			<select name="status">
				<option><?php echo $row['status']; ?></option>
				<option>Mới</option>
				<option>Cũ</option>
				<option>Mất</option>
				<option>Hư hỏng</option>
				<option>Vật thay thế</option>
			</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Cập nhập</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>