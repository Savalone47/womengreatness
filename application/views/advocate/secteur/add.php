<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">

      	</div>
    </div>
</div>






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
				<h3 class="box-title">Secteur Add</h3>
			</div>
			<?php echo form_open('secteur/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom" class="control-label">Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>" class="form-control" id="nom" />
							<span class="text-danger"><?php echo form_error('nom');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
			</div>
			<?php echo form_close(); ?>
			<!-- /.box -->
		</div>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
