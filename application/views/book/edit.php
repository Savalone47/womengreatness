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
				<h3 class="box-title">Edit <small></small></h3>
			</div>
			<?=validation_errors()?>
			<?=form_open_multipart('Books/edit/'.$book[0]->bo_id)?>
				<div class="box-body box-profile">
					<div class="col-md-3">
						<div class="pic_size" id="image-holder">
							<?php
							if(file_exists('assets/images/') && isset($user_data[0])){
								$profile_pic ='';
							}else{
								$profile_pic = 'user.png';}?>
							<center> <img class="thumb-image setpropileam" src="<?php echo base_url();?>/assets/images/books/<?=$book[0]->bo_picture?>" alt="User profile picture"></center>
						</div>
						<br>
						<div class="fileUpload btn btn-success wdt-bg">
							<span>Select Picture</span>
							<input id="fileUpload" class="upload" name="bo_picture" type="file" accept="image/*" /><br />
							<input type="hidden" name="fileOld" value="<?php echo isset($user_data[0]->profile_pic)?$user_data[0]->profile_pic:'';?>" />
						</div>
					</div>
					<div class="col-md-8">
						<h3>Book Informations:</h3>
						<div class="form-group has-feedback clear-both">
							<input type="hidden" name="bo_id" value="<?=$book[0]->bo_id?>">
							<input type="hidden" name="bo_picture" value="<?=$book[0]->bo_picture?>">
							<label for="exampleInputname">Title:</label>
							<input type="text"  name="bo_title" value="<?=$book[0]->bo_title?>" 	required="required" class="form-control" placeholder="Title">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group ">
							<label for="bo_cat_id">Category:</label>
							<select name="bo_cat_id" class="form-control">
								<?php 
									foreach ($categories as $category) {
								?>
									<option value="<?=$category['bo_cat_id']?>"><?=$category['bo_cat_name']?></option>
								<?php
									}
								?>
							</select>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Author:</label>
							<input type="text"  name="bo_author" value="<?=$book[0]->bo_author?>" required="required" class="form-control" placeholder="Author">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Publishing house:</label>
							<input type="text"  name="bo_pub_house" value="<?=$book[0]->bo_pub_house?>" required="required" class="form-control" placeholder="Publishing House">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Publication date:</label>
							<input type="date"  name="bo_pub_date" value="<?=$book[0]->bo_pub_date?>" required="required" class="form-control" placeholder="Publication Date">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="ev_description">Description:</label>
							<textarea class="form-control" name="bo_description"><?=$book[0]->bo_description?></textarea>
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group ">
							<label for="bo_status">Accessibility:</label>
							<select name="bo_access" class="form-control">
								<option value="Public">Public</option>
								<option value="Private">Private</option>
							</select>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="bo_price">Price:</label>
							<input type="number" name="bo_price" value="<?=$book[0]->bo_price?>" required="required" class="form-control">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group ">
							<label for="bo_status">Status:</label>
							<select name="bo_status" class="form-control">
								<option value="1">Activate</option>
								<option value="0">Deactivate</option>

							</select>
						</div>
						<div class="form-group has-feedback sub-btn-wdt pull-right" >
							<button type="submit" id="profileSubmit" class="btn btn-success btn-md wdt-bg">Save</button>
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
