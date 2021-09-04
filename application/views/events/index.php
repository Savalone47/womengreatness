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
							<a href="Events/create" class="btn-sm  btn btn-success"><i class="glyphicon glyphicon-plus"></i> New Event</a>	
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="cell-border example1 table table-striped table1 delSelTable">
							<thead>
							<tr>
								<th><input type="checkbox" class="selAll"></th>
								<th>Title</th>
								<th>Date</th>
								<th>Price</th>
								<th>Schedule</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								<?php foreach ($events as $event) {
								?>
								<tr>
									<th>Check Box</th>
									<th><?=$event['ev_title']?></th>
									<th><?=$event['ev_date']?></th>
									<th><?=$event['ev_price']?></th>
									<th> <a class="btn btn-success" href="<?=base_url()?>Schedule/view/<?=$event['ev_id']?>">			 <i class="fa fa-calendar"></i> 
										 </a>
									</th>
									<th>
									 	<a class="btn btn-success" href="<?=base_url()?>Events/view/<?= $event['ev_id']?>">View</a>
										<a class="btn btn-default" href="<?=base_url()?>Events/edit/<?= $event['ev_id']?>">Edit</a>
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
