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
			<div class="box-header with-border"> <small></small></h3>
			</div>
			<?=validation_errors()?>
			<?=form_open_multipart("Schedule/edit/".$schedule['sche_id'])?>
				<div class="box-body box-profile">
					<div class="col-md-6">
						<h3>Schedule Informations:</h3>
						<input type="hidden" name="ev_id" value="<?=$schedule['ev_id']?>">
						<input type="hidden" name="sche_id" value="<?=$schedule['sche_id'] ?>">
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Date:</label>
							<input type="Date" value="<?=$schedule['sche_date']?>" name="sche_date" required="required" class="form-control" 
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">start time:</label>
							<input type="time"  value="<?=$schedule['sche_start_time']?>" name="sche_start_time" required="required" class="form-control">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">End time:</label>
							<input type="time"  value="<?=$schedule['sche_end_time']?>" name="sche_end_time" required="required" class="form-control">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="ev_description">Header:</label>
							<input type="text"  value="<?=$schedule['sche_header']?>" name="sche_header" required="required" class="form-control" placeholder="Header">
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="ev_description">Title:</label>
							<input type="text" value="<?=$schedule['sche_header']?>" name="sche_title" required="required" class="form-control" placeholder="Title">
						</div>
						<div class="form-group ">
							<label for="faci_id">Facilitator:</label>
							<select name="faci_id" class="form-control">
								<option value="1">14bn016@esisalama.org</option>

								<option value="2">batshinayiphilippe@gmail.com</option>

							</select>
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
