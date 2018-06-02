<!-- Danh sach -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Danh sách file excel trên máy chủ</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover table-striped table-condensed">
						<tr>
							<th>File name</th>
							<th style="text-align: right;">Size</th>
							<th>Last Modified</th>
							<th>Action</th>
						</tr>
						<?php foreach ($list as $filename) : ?>
							<tr>
								<td>
									<a href="?file=<?php echo $filename; ?>">
										<?php echo $filename; ?>
									</a>
								</td>
								<td style="text-align: right;">
									<small style="color: #666666;">
										<?php echo $this->formatSizeUnits(filesize($filename)); ?>
									</small>
								</td>
								<td>
									<small style="color: #666666;">
										<?php echo date('F d Y, H:i:s', filemtime($filename)); ?>
									</small>
								</td>
								<td>
									<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
										<input type="hidden" name="file" value="<?php echo $filename; ?>">
										<button type="submit" name="download" value="1" class="btn btn-success btn-xs">
											<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
										</button>
										<button type="submit" name="delete" value="1" class="btn btn-danger btn-xs">
											<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
										</button>
									</form>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4 hide">
			<form class="panel panel-info" method="post" action="" enctype="multipart/form-data">
				<div class="panel-heading">
					<label class="panel-title" for="exampleInputFile">Tải lên:</label>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<input type="file" id="fileToUpload" name="fileToUpload">
						<p class="help-block">Chọn file excel để tải lên.</p>
					</div>
				</div>
				<div class="panel-footer">
					<button type="submit" name="fileUploaded" value="ok" class="btn btn-default">Tải lên</button>
				</div>
			</form>
		</div>
	</div>
</div>
