<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($conn,"select * from member where member_id='$get_id'");
		$row=mysqli_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Sửa thông tin thành viên</div>
			<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Quay lại</a></p>
	<div class="addstudent">
	<div class="details">Vui lòng nhập thông tin vào bên dưới</div>	
	<form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Họ:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Họ" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tên:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Tên" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Giới tính:</label>
			<div class="controls">
			<select name="gender" required>
			
			`
	
									
									<option><?php echo $row['gender']; ?></option>
									<option>Nam</option>
									<option>Nữ</option>
									
				</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Địa chỉ:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Địa chỉ" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Số điện thoại:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{10,11}" class="search" name="contact"  placeholder="Số điện thoại"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Vai Trò:</label>
			<div class="controls">
			<select name="type" required>
			
			
	
									
									<option><?php echo $row['type']; ?></option>
									<option>Sinh viên</option>
									<option>Giáo viên</option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Năm:</label>
			<div class="controls">
				<select name="year_level" required>			
									<option><?php echo $row['year_level']; ?></option>
									<option>Năm nhất</option>
									<option>Năm hai</option>
									<option>Năm ba</option>
									<option>Năm cuối</option>
									<option>Khoa</option>
				</select>
			</div>
		</div>
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Tình trạng:</label>
			<div class="controls">
				<select name="status" required>
									<option><?php  echo $row['status']; ?></option>
									<option>Tích cực</option>
									<option>Cấm cửa</option>
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