<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
			<div class="box-header with-border">
				<h3 class="box-title">New Issue <small></small></h3>
			</div>
			<?=validation_errors()?>
			<?=form_open_multipart('Issues/create')?>
				<div class="box-body box-profile">
					<div class="col-md-3">
						<div class="pic_size" id="image-holder">
							<?php
							if(file_exists('assets/images/') && isset($user_data[0])){
								$profile_pic ='';
							}else{
								$profile_pic = 'user.png';}?>
							<center> <img class="thumb-image setpropileam" src="<?php echo base_url();?>/assets/images/<?php echo isset($profile_pic)?$profile_pic:'user.png';?>" alt="User profile picture"></center>
						</div>
						<br>
						<div class="fileUpload btn btn-success wdt-bg">
							<span>Select Picture</span>
							<input id="fileUpload" class="upload" name="is_picture" type="file" accept="image/*" /><br />
							<input type="hidden" name="fileOld" value="<?php echo isset($user_data[0]->profile_pic)?$user_data[0]->profile_pic:'';?>" />
						</div>
					</div>
					<div class="col-md-8">
						<h3>Issue Informations:</h3>
						<div class="form-group has-feedback clear-both">
							<label for="is_title">Title:</label>
							<input type="text"  name="is_title" value="" required="required" class="form-control" placeholder="Title">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="is_description">Description:</label>
							<textarea class="form-control" name="is_description"></textarea>
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback sub-btn-wdt pull-right" >
							<button name="submit1" type="button" id="profileSubmit" class="btn btn-success btn-md wdt-bg">Save</button>
							<!-- <div class=" pull-right">
							</div> -->
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</form>
			<!-- /.box -->
		</div>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
