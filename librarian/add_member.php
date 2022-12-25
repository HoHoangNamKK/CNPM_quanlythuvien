<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Thêm thành viên</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Quay lại</a></p>
	<div class="addstudent">
	<div class="details">Vui lòng điền thông tin vào bên dưới</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Họ:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Họ" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tên:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="Tên" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Giới tính:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Nam</option>
				<option>Nữ</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Địa chỉ:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Địa chỉ" required>
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
			
			
			
									<option></option>
									<option>Sinh viên</option>
									<option>Giáo viên</option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Năm:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>Năm nhất</option>
									<option>Năm hai</option>
									<option>Năm ba</option>
									<option>Năm cuối</option>
									<option>khoa</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Lưu</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>