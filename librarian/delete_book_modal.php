	<div id="delete_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Bạn có chắc chắn muốn Xóa dữ liệu này không?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_books.php<?php echo '?id='.$id; ?>">Có</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Tắt</button>
		</div>
    </div>
	
