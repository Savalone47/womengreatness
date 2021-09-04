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
				<h3 class="box-title">New Podcast <small></small></h3>
			</div>
			<?=validation_errors()?>
			<?=form_open_multipart('Podcasts/create')?>
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
						<input id="fileUpload" class="upload" name="ev_picture" type="file" accept="image/*" /><br />
						<input type="hidden" name="fileOld" value="<?php echo isset($user_data[0]->profile_pic)?$user_data[0]->profile_pic:'';?>" />
					</div>
				</div>
				<div class="col-md-8">
					<h3>Event Informations:</h3>
					<div class="form-group has-feedback clear-both">
						<label for="exampleInputname">Title:</label>
						<input type="text"  name="pod_title" required="required" class="form-control" placeholder="Title">
						<span class="glyphicon glyphicon-userr form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback clear-both">
						<label for="ev_description">Autors:</label>
						<textarea class="form-control" name="pod_"> </textarea>
						<span class="glyphicon glyphicon-userr form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="ev_cat_id">Category:</label>
						<select name="ev_cat_id" class="form-control">
							<?php
							foreach ($event_categories as $event_category) {
								?>
								<option value="<?=$event_category['ev_cat_id']?>"><?=$event_category['ev_cat_name']?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="form-group has-feedback clear-both">
						<label for="exampleInputname">Start Date:</label>
						<input type="date"  name="ev_date" required="required" class="form-control"
						<span class="glyphicon glyphicon-userr form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="ev_country">Facilitator:</label>
						<select class="form-control" name="facilitator">
							<?php foreach($facilitators as $facilitator):?>
								<option value="<?php echo $facilitator->faci_id?>"><?php echo $facilitator->faci_name?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="form-group has-feedback">
						<label for="ev_country">Country:</label>
						<select name="ev_country" class="form-control">
							<option value="RD Congo">RD Congo</option>
							<option value="France">France</option>
							<option value="USA">USA</option>
							<option value="UK">UK</option>
						</select>
					</div>
					<div class="form-group has-feedback clear-both">
						<label for="exampleInputname">City:</label>
						<input type="text"  name="ev_city" required="required" class="form-control" placeholder="City">
						<span class="glyphicon glyphicon-userr form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback clear-both">
						<label for="exampleInputname">Place:</label>
						<input type="text"  name="ev_place" required="required" class="form-control" placeholder="Place">
						<span class="glyphicon glyphicon-userr form-control-feedback"></span>
					</div>

					<div class="form-group has-feedback clear-both">
						<label for="exampleInputname">Price:</label>
						<input type="number" name="ev_price" required="required" class="form-control">
						<span class="glyphicon glyphicon-userr form-control-feedback"></span>
					</div>

					<div class="form-group has-feedback sub-btn-wdt pull-right" >
						<button name="submit1" type="button" id="profileSubmit" class="btn btn-success btn-md wdt-bg">Add</button>
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
