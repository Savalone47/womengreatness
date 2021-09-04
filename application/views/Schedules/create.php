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
				<h3 class="box-title">Event Title: <?=$event[0]->ev_title?><small></small></h3>
			</div>
			<?=validation_errors()?>
			<?=form_open_multipart("Schedule/create/".$event[0]->ev_id)?>
				<div class="box-body box-profile">
					<div class="col-md-6">
						<h3>Schedule Informations:</h3>
						<input type="hidden" name="ev_id" value="<?=$event[0]->ev_id?>">
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">Date:</label>
							<input type="Date"  name="sche_date" required="required" class="form-control" 
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">start time:</label>
							<input type="time"  name="sche_start_time" required="required" class="form-control">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="exampleInputname">End time:</label>
							<input type="time"  name="sche_end_time" required="required" class="form-control">
							<span class="glyphicon glyphicon-userr form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="ev_description">Header:</label>
							<input type="text"  name="sche_header" required="required" class="form-control" placeholder="Header">
						</div>
						<div class="form-group has-feedback clear-both">
							<label for="ev_description">Title:</label>
							<input type="text"  name="sche_title" required="required" class="form-control" placeholder="Title">
						</div>
						<div class="form-group ">
							<label for="faci_id">Facilitator:</label>
							<select name="faci_id" class="form-control">
							<?php
							foreach ($facilitators as $facilitator) {
							?>
								<option value="<?=$facilitator['faci_id']?>"><?=$facilitator['faci_name']?></option>
							<?php
							}
							?>
							</select>
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
