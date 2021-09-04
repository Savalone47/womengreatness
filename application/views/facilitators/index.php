<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- Main content -->
	<section class="content">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title"><?=$title?></h3>
						<div class="box-tools">
							<a href="Facilitators/create" class="btn-sm  btn btn-success"><i class="glyphicon glyphicon-plus"></i> New Facilitators</a>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="cell-border example1 table table-striped table1 delSelTable">
							<thead>
							<tr>
								<th><input type="checkbox" class="selAll"></th>
								<th>Names</th>
								<th>Emails</th>
								<th>Phones</th>
								<th>Countries</th>
								<th>Organisations</th>
								<th>Positions</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($facilitators as $faci) {
								?>
								<tr>
									<th>Check Box</th>
									<th><?=$faci->faci_name?></th>
									<th><?=$faci->faci_email?></th>
									<th><?=$faci->faci_phone?></th>
									<th><?=$faci->faci_country?></th>
									<th><?=$faci->faci_organisation?></th>
									<th><?=$faci->faci_position?></th>
									<th>
										<a class="btn btn-default" href="<?=base_url()?>Facilitators/view/<?= $faci->faci_id?>" >View More</a>
									</th>
								</tr>
								<?php
							} ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- Modal Crud Start-->
<div class="modal fade" id="nameModal_user" role="dialog">
	<div class="modal-dialog">
		<div class="box box-primary popup" >
			<div class="box-header with-border formsize">
				<h3 class="box-title">User Form</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<!-- /.box-header -->
			<div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
		</div>
	</div>
</div><!--End Modal Crud -->
