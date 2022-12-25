	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Thêm tài khoản</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Tài khoản</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="username" placeholder="Tài khoản" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Mật khẩu</label>
				<div class="controls">
				<input type="password" name="password" id="inputPassword" placeholder="Mật khẩu" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Họ</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="firstname" placeholder="Họ" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Tên</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="lastname" placeholder="Tên" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Lưu</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Tắt</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	mysqli_query($conn,"insert into users (username,password,firstname,lastname) values('$username','$password','$firstname','$lastname')");
	}
	?>