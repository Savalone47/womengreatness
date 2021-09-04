
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
		<div class="box-body">
			<form method="POST" action="<?php site_url('Organisation/add_organisation/')?>">
				<h6 class="form__title">Register</h6><span class="form__text">organisation</span>

				<?php if($this->session->success):?>
					<br><br><br>
					<div class="alert alert-success">
						<p>Success of registrement of your organisation!</p>
					</div>
				<?php endif?>
				<div class="row">
					<div class="col-lg-6 form-group">
						<input class="form-control" type="text" name="nom_organisation" placeholder="name*" required="required"/>
					</div>
					<div class="col-lg-6 form-group">
						<select class="form-control" name="secteur">
							<?php foreach($all_secteur as $secteur):?>
								<option value="<?php echo $secteur->id?>"><?php echo $secteur->nom?></option>
							<?php endforeach?>
						</select>					
					</div>
												
					<div class="col-lg-6 form-group">
						<select class="form-control" name="pays">
							<option >France</option>
							<option >France</option>
							<option >France</option>
						</select>
					</div>
					<div class="col-lg-6 form-group">
						<input class="form-control" type="text" name="ville" placeholder="ville *" required="required"/>
					</div>
					<div class="col-lg-6 form-group">
						<input class="form-control" type="text" name="province" placeholder="province"/>
					</div>
					<div class="col-lg-6 form-group">
						<input class="form-control" type="link" name="site_internet" placeholder="site_internet"/>
					</div>													
				</div>
				<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
			</form>
			
		</div>
			
				<!-- /.box-body -->

		</div>
		<!-- /.content -->
	</div>
</div>













