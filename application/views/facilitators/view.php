<div class="content-wrapper clearfix">
	<?php foreach ($facilitators as $faci):?>
		<div class="row">
			<div class="col-md-3">
				<section class="content">
					<img src="<?= base_url('/assets/images/events/'.$faci->faci_picture);?>" width="100%">
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
						<h2><?=$faci->faci_name?></h2>
						<small class="post-date">Posted on: <?php echo $faci->faci_email?> In <b><?=$faci->faci_phone?></b></small> <br>
						<div class="post-body">
							<?= $faci->faci_organisation?>
						</div>
						<div class="post-body">
							<?= $faci->faci_position?>
						</div>
						<br>
						<?=form_open()?>
						<a class="btn btn-default" href="<?= base_url() ?>Facilitators/edit/<?= $faci->faci_id ?>">Edit</a>
						<a class="btn btn-danger" href="<?=site_url('Facilitators/delete/').$faci->faci_id ?>">delete</a>
						</form>
					</div>
				</section>
			</div>
			<div class="col-md-1"></div>
		</div>
	<?php endforeach?>
</div>
