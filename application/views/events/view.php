<div class="content-wrapper clearfix">
	<?php foreach ($events as $event):?>
	<div class="row">
		<div class="col-md-3">
			<section class="content">
				<img src="<?php echo base_url();?>/assets/images/events/<?=$event->ev_picture?>" width="100%">
			</section>	
		</div>
		<div class="col-md-8">
			<section class="content">
				<?php if($this->session->flashdata("messagePr")){?>
					<div class="alert alert-info">
						<?php echo $this->session->flashdata("messagePr")?>
					</div>
				<?php } ?>
				<div class="row"> 
					<h2><?=$event->ev_title?></h2>
					<small class="post-date">Posted on: <?php echo $event->ev_created_at?> In <b><?=$event->ev_cat_name?></b> </small> <br>
					<div class="post-body">
						<?= $event->ev_description?>
					</div>
					<br>
					<?=form_open()?>
						<a class="btn btn-default" href="<?= base_url() ?>Events/edit/<?= $event->ev_id ?>">Edit</a>
						<a class="btn btn-danger" href="<?=site_url('Events/delete/').$event->ev_id ?>">delete</a>
					</form>
				</div>
			</section>
		</div>
		<div class="col-md-1"></div>
	</div>
	<?php endforeach?>
</div>
