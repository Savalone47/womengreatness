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
							<a href="Books/create" class="btn-sm  btn btn-success"><i class="glyphicon glyphicon-plus"></i> New Book</a>	
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="cell-border example1 table table-striped table1 delSelTable">
							<thead>
							<tr>
								<th>PICTURE</th>
								<th>TITLE</th>
								<th>AUTHOR</th>
								<th>CATEGORY</th>
								<th>ACCESSBILITY</th>
								<th>OPTIONS</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							foreach ($books as $book) {
							?>
								<tr>
									<td>No Picture</td>
									<td><?=$book['bo_title']?></td>
									<td><?=$book['bo_author']?></td>
									<td><?=$book['bo_cat_name']?></td>
									<td><?=$book['bo_access']?></td>
									<td>
										<a class="btn btn-default" href="<?=base_url()?>Books/addPdf/<?=$book['bo_id']?>">PDF</a>
										<a class="btn btn-success" href="<?=base_url()?>Books/view/<?=$book['bo_id']?>">View</a>
										<a class="btn btn-default" href="<?=base_url()?>Books/edit/<?=$book['bo_id']?>">Edit</a>
									</td>
								</tr>
							<?php
							}
							?>
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
<script type="text/javascript">
	
	$(document).ready(function() {
		/*var url = '<?php echo base_url();?>';
		var table = $('#example1').DataTable({
			dom: 'lfBrtip',
			buttons: [
				'copy', 'excel', 'pdf', 'print'
			],
			"processing": true,
			"serverSide": true,
			"ajax": url+"user/dataTable",
			"sPaginationType": "full_numbers",
			"language": {
				"search": "_INPUT_",
				"searchPlaceholder": "Search",
				"paginate": {
					"next": '<i class="fa fa-angle-right"></i>',
					"previous": '<i class="fa fa-angle-left"></i>',
					"first": '<i class="fa fa-angle-double-left"></i>',
					"last": '<i class="fa fa-angle-double-right"></i>'
				}
			},
			"iDisplayLength": 10,
			"aLengthMenu": [[10, 25, 50, 100,500,-1], [10, 25, 50,100,500,"All"]]
		});
		*/
		setTimeout(function() {
			var add_width = $('.dataTables_filter').width()+$('.box-body .dt-buttons').width()+10;
			$('.table-date-range').css('right',add_width+'px');

			$('.dataTables_info').before('<button data-base-url="<?php echo base_url().'user/delete/'; ?>" rel="delSelTable" class="btn btn-default btn-sm delSelected pull-left btn-blk-del"> <i class="fa fa-trash"></i> </button><br><br>');
		}, 300);
		$("button.closeTest, button.close").on("click", function (){});
	});
</script>
