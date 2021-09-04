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
							<a href="<?=base_url()?>Schedule/viewCreate/<?=$ev_id?>" class="btn-sm  btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add Schedule</a>	
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						
						<table id="example1" class="cell-border example1 table table-striped table1 delSelTable">
							<thead>
							<tr>
								<th>Date</th>
								<th>Start time</th>
								<th>End Time</th>
								<th>Header</th>
								<th>Title</th>
								<th>Facilitator</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								<?php
									foreach ($schedules as $schedule) {
								?>
									<tr>
										<td><?=$schedule['sche_date']?></td>
										<td><?=$schedule['sche_start_time']?></td>
										<td><?=$schedule['sche_end_time']?></td>
										<td><?=$schedule['sche_header']?></td>
										<td><?=$schedule['sche_title']?></td>
										<td><?=$schedule['faci_id']?></td>
										<td>
											<a class="btn btn-success" href="<?=base_url()?>Schedule/edit/<?=$schedule['sche_id']?>">Edit</a>
											<a class="btn btn-danger" href="">Delete</a>
										</td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>