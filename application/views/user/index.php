<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
	<!-- Main content -->
	
	<div class="col-md-12 form f-label">
		
		<div class="box box-success pad-profile">
			<div class="box-header with-border">
				<h3 class="box-title">Categories User<small></small></h3>
			</div>
			<div class="box-body box-profile">
				<?php foreach($roles as $role):?>
					<div class="col-md-3">
						<div class="pic_size" id="image-holder">
							<img class="thumb-image setpropileam" src="<?php echo base_url()?>/assets/images/user.png" alt="User profile picture">
						</div>
						<br>
						<div class="fileUpload btn btn-success wdt-bg">
							<a href="<?php echo site_url('User/users/'.$role->user_role_id)?>"><span><?php echo $role->user_role_name?></span></a>
						</div>
					</div>
				<?php endforeach?>
				</div>
			<!-- /.box -->
		</div>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
