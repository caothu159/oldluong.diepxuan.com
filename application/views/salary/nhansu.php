<div class="title cong">Ngày công: <span><?php echo $nhansu->getCong(); ?></span></div>
<?php if ($nhansu->getNangSuat() > 0): ?>
	<div class="title congnhat">Lương cứng: <span><?php echo $nhansu->getCongNhat(); ?></span></div>
	<div class="title nangsuat">Năng suất: <span><?php echo $nhansu->getNangSuat(); ?></span></div>
	<div class="title luong">Lương: <span><?php echo $nhansu->getCongNhat() + $nhansu->getNangSuat(); ?></span></div>
	<div class="chitiet">Chi tiết:
		<div class="table-responsive">
			<?php $this->load->view('salary/chitiet', array('nhansu' => $nhansu)); ?>
		</div>
	</div>
<?php else: ?>
	<div class="title luong">Lương: <span><?php echo $nhansu->getCongNhat(); ?></span></div>
<?php endif; ?>
